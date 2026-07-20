-- ==========================================
-- QONKAR TECHNOLOGIES - NEW CASE STUDIES SQL SETUP
-- ==========================================
-- Upload/Run this SQL script directly in phpMyAdmin or command line to insert 
-- the 4 new Case Studies (Careevo, Sellvixa, Schoolian, Homalix) into your live database.

-- 1. Insert Case Studies
-- Use INSERT IGNORE to prevent errors if you run it multiple times.
INSERT INTO `case_studies` (`mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`) VALUES
('images/case-studies/homalix_mockup.png', 'images/case-studies/background/homalix_bg.png', 'Homalix Hospital Management System', 'A unified, secure, and highly scalable Hospital Management System centralizing electronic medical records, patient flow triage, and diagnostics across healthcare networks.', 'active', '/case-studies/homalix'),
('images/case-studies/schoolian_dashboard.png', 'images/case-studies/schoolian_bg.png', 'Schoolian School Management System', 'A premium, multi-portal EdTech platform built to centralize school administration, streamline teacher registers, automate dynamic grading workflows, and simplify parent billing.', 'active', '/case-studies/schoolian.php'),
('images/case-studies/sellvixa_dashboard.png', 'images/case-studies/background/sellvixa_bg.png', 'Sellvixa Retail Management System & POS', 'A futuristic Point of Sale (POS) and Multi-Branch Retail Management ERP system, consolidating inventory tracking, automated billing, and live checkout analytics.', 'active', '/case-studies/sellvixa'),
('images/case-studies/craveeo_order_pic.webp', 'images/case-studies/careevo_bg.png', 'Careevo', 'An intelligent, high-performance Restaurant Management OS linking table QR ordering, real-time kitchen queues, inventory control, and multi-outlet analytics.', 'active', '/case-studies/careevo');

-- 2. Insert Category Bridge Mappings
-- Links the newly inserted case studies to Category ID 2 (Software Development).
INSERT INTO `case_study_category_bridge` (`case_study_id`, `category_id`)
SELECT `id`, 2 FROM `case_studies`
WHERE `brand_name` IN (
    'Homalix Hospital Management System', 
    'Schoolian School Management System', 
    'Sellvixa Retail Management System & POS', 
    'Careevo'
)
AND `id` NOT IN (
    SELECT `case_study_id` FROM `case_study_category_bridge` WHERE `category_id` = 2
);
