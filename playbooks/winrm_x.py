import winrm

# Define the WinRM session
session = winrm.Session('http://10.201.217.66:5985/wsman', auth=('secadmin', 'p#vssG2024'))

# Run a command (e.g., ipconfig)
result = session.run_cmd('ipconfig')

# Print the output
print(result.std_out.decode('utf-8'))
