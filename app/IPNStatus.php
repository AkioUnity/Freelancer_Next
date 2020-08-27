<?php
/**
 * Class IPNStatus
 *
* @author  An ShiWei <amg1988925@gmail.com>
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IPNStatus
 *
 */
class IPNStatus extends Model
{
    /**
     * Set scope of the variable
     *
     * @access public
     *
     * @return array
     */
    protected $table = 'ipn_status';

    /**
     * Set scope of the variable
     *
     * @access public
     *
     * @return array
     */
    protected $fillable = [
        'payload',
        'status'
    ];
}
