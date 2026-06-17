<?php
$team = [
    ['M-Owais.webp', 'Muhammad Owais', 'CEO', 'https://www.linkedin.com/in/muhammadowaisrehmani/'],
    ['arsalan.webp', 'Muhammad Arslan', 'COO', 'https://www.linkedin.com/in/devmarslan'],
    ['Abdul-Rehman.webp', 'Abdul Rehman', 'SEO Specialist', 'https://www.linkedin.com/in/abdul-rehman-jatt/'],
    ['hassan_waheed_pic.webp', 'Hassan Waheed', 'Business Development Manager', '#'],
    ['alina.webp', 'Alina Ahmed', 'HR Manager', 'https://www.linkedin.com/in/alina-ahmed-55a504266/'],
    ['muqadas.webp', 'Muqadas Lakho', 'Jr. SEO', 'https://www.linkedin.com/in/muqadas-lakho-6243b9298'],
    ['zain.webp', 'Muhammad Zain', 'AI Engineer', 'https://www.linkedin.com/in/muhammad-zain-rehmani/'],
    ['huzaifa.webp', 'Huzaifa Haris', 'Software Engineer', 'https://www.linkedin.com/in/huzaifa-haris-aa8281262/'],
    ['faraz.webp', 'Muhammad Faraz', 'Software Engineer', 'https://www.linkedin.com/in/muhammadfaraz-abbasi'],
    ['Tooba.webp', 'Tooba', 'Graphics Designer', 'https://www.linkedin.com/in/toobaayoub'],
    ['Bisma.webp', 'Bisma', 'SEO Intern', 'https://www.linkedin.com/in/bisma-a-khan-018b85386/'],
    ['Muskan.webp', 'Muskan', 'Social Media Manager', 'https://www.linkedin.com/in/muskan-rathore-658354251']
];

$out = "            <div class=\"team-cards-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12\">\n";

foreach ($team as $member) {
    list($img, $name, $role, $link) = $member;
    $out .= <<<HTML
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/$img" alt="$name"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">$name</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">$role</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="$link" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>

HTML;
}
$out .= "            </div>";

file_put_contents('team_out.html', $out);
echo "Done";
