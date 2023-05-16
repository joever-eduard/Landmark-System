<?php namespace App\Models;

use CodeIgniter\Model;

class PropertyDistanceModel extends Model{
    protected $table = 'property_distance';
    // TODO: Update fields
    protected $allowedFields = [
        'distance_id',
        'lot_no', 
        'bllm', 
        'distance_to_point1',
        ];
    protected $beforeInsert = [];
    protected $beforeUpdate = [];
}