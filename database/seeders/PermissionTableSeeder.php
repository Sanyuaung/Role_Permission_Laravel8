<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'AcqOnUs',
            'AcqOnUs_DL',
            'ATM',
            'ATM_DL',
            'CCY',
            'CO',
            'CO_DL',
            'CrAnnualFee',
            'CrAnnualFee_DL',
            'CrCardStatus',
            'CrCardStatus_DL',
            'DbCardList',
            'DbCardList_DL',
            'DeleteMerchant',
            'ExportMerchant',
            'ImportMerchant',
            'JCB_DL',
            'JcbHome',
            'MpuHome',
            'NewSwitch_DL',
            'Pssd01',
            'Pssd01_DL',
            'Pssd02',
            'Pssd02_DL',
            'Pssd04',
            'Pssd04_DL',
            'RoleControl',
            'RoleCreate',
            'RoleDelete',
            'RoleEdit',
            'UPI_DL',
            'UpiHome',
            'UserControl',
            'UserRoleUpdate',
            'UserCreate',
            'UserDelete',
            'UserEdit',
            'UserShow',
            'Visa',
            'Visa_DL',
            'VisaEdit',
            'VisaShowAll',
            'VisaUpdate',

        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}