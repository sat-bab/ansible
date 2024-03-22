import csv, json, sys, os
import pandas as pd
from pathlib import Path

def json_to_csv(inputfile):
  with open(inputfile, 'r', encoding='utf-8') as f:
    data = json.loads(f.read())

    df = pd.json_normalize(data)

    cf = df.to_csv(index=False, encoding='utf -8')
    return cf

def main():
    # Directory containing JSON files
    directory = "/home/secadmin/ansible/tmp/"

    # Output CSV file
    output_csv_file = "/home/secadmin/ansible/tmp/output.csv"

    # Iterate through each file in the directory
    with open(output_csv_file, 'a', newline='') as csv_file:
        writer = csv.writer(csv_file)

        for filename in os.listdir(directory):
            inputfile = os.path.join(directory, filename)
            # Check if the item is a file and ends with .json
            if os.path.isfile(inputfile):
                csv_data = json_to_csv(inputfile)
                writer.writerows(csv_data)

if __name__ == "__main__":
    main()
