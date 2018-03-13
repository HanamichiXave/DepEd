<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    protected $fillable = ['asset_number', 'item_product', 'rfid_tag_barcode', 'brand_model', 'type_of_asset', 'amount_of_purchase', 'asset_warranty_start', 'supplier_name', 'asset_quantity_unit', 'contact_person', 'manufacturer', 'asset_name', 'asset_description', 'date_of_purchase', 'product_condition', 'asset_warranty_expiration', 'supplier_address', 'asset_serial_number', 'contact_number', 'asset_location', 'employee_pic', 'id_number', 'employee_name', 'section_site', 'date_of_received', 'department_head_name', 'date_hired', 'department', 'location', 'asset_cost', 'prod_condition'];
}
