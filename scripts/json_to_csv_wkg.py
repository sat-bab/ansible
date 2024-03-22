import csv, json, sys
import pandas as pd
from pathlib import Path

p = Path('/home/secadmin/ansible/facts.d/10.201.217.45')

with p.open('r', encoding='utf-8') as f:
    data = json.loads(f.read())

df = pd.json_normalize(data)

df.to_csv('temp.csv', index=False, encoding='utf -8')
