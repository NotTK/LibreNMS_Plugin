<?php


namespace App\Http\Controllers\Device\Tabs;

use App\Models\Device;
use Illuminate\Foundations\Auth\Access\AuthorizeRequests;
use Illuminate\Http\Request;
use LibreNMS\Interfaces\UI\DeviceTab;

class OneclickController implements DeviceTab {

  use AuthorizeRequests;

  public function visible(Device $device): bool {
    return true;
  }

  public function slug(): string {
    return 'oneclick';
  }

  public function icon(): string {
    return 'fa-file-text-o';
  }

  public function name(): string {
    return __('Oneclick Diagnostics');
  }

  public function data(Device $device): array {
    return [];
  }

  public function update (Request $request, Device $device) {
    $this->authorize('update-notes', $device);

    $device->notes = $request->input('note');
    $device->save();
  }
}









