#from netmiko import ConnectHandler
#from librenms_handler.devices import Devices
import requests
import json

api_url = 'http://localhost:8080/api/v0'  
api_token = 'ff6ac30ff4279a8340bf78f79084d5e4'  

endpoint = 'devices'

headers = {
    'X-Auth-Token': api_token,
    'Content-Type': 'application/json',
}

try:
    response = requests.get(f'{api_url}/{endpoint}', headers=headers)
    response.raise_for_status()  

    response_data = json.loads(response.text)


    if "devices" in response_data:
        devices = response_data["devices"]
    else:
        devices = response_data 


    filtered_devices = []

    for device in devices:
        # Extract specific fields
        filtered_device = {
            'device_id': device.get('device_id', ''),
            'hostname': device.get('hostname', ''),
            'sysName': device.get('sysName', ''),
            'ip': device.get('ip', ''),
            'port': device.get('port', ''),
            'features': device.get('features', ''),
            'location_id': device.get('location_id', ''),
            'os': device.get('os', ''),
            'type': device.get('type', ''),
        }
        filtered_devices.append(filtered_device)


    with open('OneClickDiag.json', 'w') as file:
        json.dump(filtered_devices, file, indent=4)

    print("Data has been saved to 'OneClickDiag.json'")

except requests.exceptions.RequestException as e:
    print(f"An error occurred: {e}")


