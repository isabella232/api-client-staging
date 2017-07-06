<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/type.proto

namespace Google\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `StructType` defines the fields of a [STRUCT][google.spanner.v1.TypeCode.STRUCT] type.
 *
 * Protobuf type <code>Google\Spanner\V1\StructType</code>
 */
class StructType extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of fields that make up this struct. Order is
     * significant, because values of this struct type are represented as
     * lists, where the order of field values matches the order of
     * fields in the [StructType][google.spanner.v1.StructType]. In turn, the order of fields
     * matches the order of columns in a read request, or the order of
     * fields in the `SELECT` clause of a query.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.StructType.Field fields = 1;</code>
     */
    private $fields;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        parent::__construct();
    }

    /**
     * The list of fields that make up this struct. Order is
     * significant, because values of this struct type are represented as
     * lists, where the order of field values matches the order of
     * fields in the [StructType][google.spanner.v1.StructType]. In turn, the order of fields
     * matches the order of columns in a read request, or the order of
     * fields in the `SELECT` clause of a query.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.StructType.Field fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The list of fields that make up this struct. Order is
     * significant, because values of this struct type are represented as
     * lists, where the order of field values matches the order of
     * fields in the [StructType][google.spanner.v1.StructType]. In turn, the order of fields
     * matches the order of columns in a read request, or the order of
     * fields in the `SELECT` clause of a query.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.StructType.Field fields = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setFields(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Spanner\V1\StructType_Field::class);
        $this->fields = $arr;
    }

}

