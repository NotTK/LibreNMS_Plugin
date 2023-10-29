#from netmiko import ConnectHandler
#from librenms_handler.devices import Devices
import requests

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

    print(response.text)

except requests.exceptions.RequestException as e:
    print(f"An error occurred: {e}")


