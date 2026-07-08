import os
import re

button_pattern = re.compile(r'<(a|button)[^>]*class="([^"]*(?:px-\d+|py-\d+|btn|rounded-full)[^"]*)"[^>]*>', re.IGNORECASE)
files_with_buttons = {}

for root, _, files in os.walk('.'):
    if 'node_modules' in root or '.git' in root or 'scratch' in root: continue
    for file in files:
        if file.endswith('.php'):
            path = os.path.join(root, file)
            with open(path, 'r', encoding='utf-8', errors='ignore') as f:
                content = f.read()
                matches = button_pattern.findall(content)
                if matches:
                    valid_matches = []
                    for tag, cls in matches:
                        # exclude non-button things that just have rounded-full
                        if 'w-2' in cls or 'w-5' in cls or 'h-5' in cls or 'badge' in cls or 'w-12' in cls or 'w-14' in cls or 'w-7' in cls or 'w-9' in cls:
                            continue
                        if 'rounded-full' in cls or 'btn' in cls or ('px-' in cls and 'py-' in cls):
                            valid_matches.append(cls)
                    if valid_matches:
                        files_with_buttons[path] = valid_matches

print(f'Found {len(files_with_buttons)} files with buttons.')
for k in list(files_with_buttons.keys()):
    print(k, "->", len(files_with_buttons[k]), "buttons")
