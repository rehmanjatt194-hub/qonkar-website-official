import urllib.request

try:
    url = "http://localhost:8000/case-studies/sellvixa.php"
    response = urllib.request.urlopen(url)
    html = response.read().decode('utf-8')
    lines = html.splitlines()
    for i, line in enumerate(lines):
        if "folded-tab" in line:
            print(f"Line {i+1}: {line}")
except Exception as e:
    print(f"Error: {e}")
