<?php
$about_us = file_get_contents('about-us.php');
$team_html = file_get_contents('team_out.html');

// Find the start and end of the team-cards-container
$start_pos = strpos($about_us, '<div class="team-cards-container');
$end_pos = strpos($about_us, '</div>', strrpos(substr($about_us, 0, strpos($about_us, '<div class="text-center">', $start_pos) - 1), '</div>'));
// Actually, it's safer to use preg_replace or find the exact string.
// Let's find the position of '<div class="team-cards-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">'
$start_marker = '<div class="team-cards-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">';
$start_idx = strpos($about_us, $start_marker);

$end_marker = '<div class="text-center">'; // The div that wraps the View More button
$end_idx = strpos($about_us, $end_marker, $start_idx);

if ($start_idx !== false && $end_idx !== false) {
    // We want to replace from $start_idx to $end_idx (excluding the end marker itself)
    // Wait, the end marker is preceded by empty lines. Let's just replace up to $end_idx.
    $new_content = substr($about_us, 0, $start_idx) . $team_html . "\n\n            " . substr($about_us, $end_idx);
    file_put_contents('about-us.php', $new_content);
    echo "Replaced successfully!";
} else {
    echo "Failed to find markers";
}
