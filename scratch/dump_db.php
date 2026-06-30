<?php
require_once "db-path.php";
require_once ADMIN_URL."/database_config.php";
$tablesResult = $conn->query("SHOW TABLES");
$sqlDump = "";
while ($row = $tablesResult->fetch_array()) {
    $table = $row[0];
    $createResult = $conn->query("SHOW CREATE TABLE `$table`");
    $createRow = $createResult->fetch_array();
    $sqlDump .= "-- Table structure for `$table` --\nDROP TABLE IF EXISTS `$table`;\n" . $createRow[1] . ";\n\n";
    if (in_array($table, ["portfolio_categories", "case_studies", "case_study_category_bridge"])) {
        $dataResult = $conn->query("SELECT * FROM `$table`");
        while ($dataRow = $dataResult->fetch_assoc()) {
            $cols = array_keys($dataRow);
            $vals = array_values($dataRow);
            $escapedVals = array_map(function($val) use ($conn) {
                if ($val === null) return "NULL";
                return "\"". $conn->real_escape_string($val) ."\"";
            }, $vals);
            $sqlDump .= "INSERT INTO `$table` (`" . implode("`, `", $cols) . "`) VALUES (" . implode(", ", $escapedVals) . ");\n";
        }
        $sqlDump .= "\n";
    }
}
file_put_contents("database_schema.sql", $sqlDump);
echo "Done";
?>
