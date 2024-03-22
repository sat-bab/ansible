import csv, json, sys
import pandas as pd
from pathlib import Path

print(sys.argv[1])
p = Path(sys.argv[1])

with p.open('r', encoding='utf-8') as f:
    data = json.loads(f.read())

df = pd.json_normalize(data)

df.to_csv('output.csv', index=False, encoding='utf -8')
