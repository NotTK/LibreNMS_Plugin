# Oneclick Device Diagnostics


Installation Instructions:

**These instructions assume you are the root user. If you are not, prepend sudo to the shell commands or temporarily become a user with root privileges**

After logging into your LibreNMS server CLI:

```cd ~/``` Home dir

```git clone https://github.com/NotTK/Oneclick``` Clone repo to your home dir

```mv Oneclick/Oneclick.blade.php resources/views/device/tabs/``` Moving Oneclick.blade.php to correct dir

```mv Oneclick/OneclickController.php app/Http/Controllers/Device/Tabs/``` Moving OneclickController.php to correct dir

```vi app/Http/Controller/DeviceController.php``` Edit the DeviceController.php file
  Using 'vi':
    press 'i' to switch to INSERT mode (Typing Mode)
    press 'esc' to switch to READ mode
    to save file and exit you have to be in READ mode and type ':wq'
    to leave file without saving you have to be in READ mode and type ':q'
    to force leave file without saving you have to be in READ mode and type ':q!'

One you are editing the DeviceController.php file, find the 'private $tabs',
at the bottom after the 'CaptureController::class,' press ENTER to add a new line
(make sure you are in INSERT mode) and type the following:
```'oneclick' => \App\Http\Controllers\Device\Tabs\OneclickController::class,```




