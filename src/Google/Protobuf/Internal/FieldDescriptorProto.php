<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\RepeatedField;

/**
 * Describes a field within a message.
 *
 * Generated from protobuf message <code>google.protobuf.FieldDescriptorProto</code>
 */
class FieldDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = null;
    /**
     * Generated from protobuf field <code>optional int32 number = 3;</code>
     */
    protected $number = null;
    /**
     * Generated from protobuf field <code>optional .google.protobuf.FieldDescriptorProto.Label label = 4;</code>
     */
    protected $label = null;
    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FieldDescriptorProto.Type type = 5;</code>
     */
    protected $type = null;
    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>optional string type_name = 6;</code>
     */
    protected $type_name = null;
    /**
     * For extensions, this is the name of the type being extended.  It is
     * resolved in the same manner as type_name.
     *
     * Generated from protobuf field <code>optional string extendee = 2;</code>
     */
    protected $extendee = null;
    /**
     * For numeric types, contains the original text representation of the value.
     * For booleans, "true" or "false".
     * For strings, contains the default text contents (not escaped in any way).
     * For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     *
     * Generated from protobuf field <code>optional string default_value = 7;</code>
     */
    protected $default_value = null;
    /**
     * If set, gives the index of a oneof in the containing type's oneof_decl
     * list.  This field is a member of that oneof.
     *
     * Generated from protobuf field <code>optional int32 oneof_index = 9;</code>
     */
    protected $oneof_index = null;
    /**
     * JSON name of this field. The value is set by protocol compiler. If the
     * user has set a "json_name" option on this field, that option's value
     * will be used. Otherwise, it's deduced from the field's name by converting
     * it to camelCase.
     *
     * Generated from protobuf field <code>optional string json_name = 10;</code>
     */
    protected $json_name = null;
    /**
     * Generated from protobuf field <code>optional .google.protobuf.FieldOptions options = 8;</code>
     */
    protected $options = null;
    /**
     * If true, this is a proto3 "optional". When a proto3 field is optional, it
     * tracks presence regardless of field type.
     * When proto3_optional is true, this field must belong to a oneof to signal
     * to old proto3 clients that presence is tracked for this field. This oneof
     * is known as a "synthetic" oneof, and this field must be its sole member
     * (each proto3 optional field gets its own synthetic oneof). Synthetic oneofs
     * exist in the descriptor only, and do not generate any API. Synthetic oneofs
     * must be ordered after all "real" oneofs.
     * For message fields, proto3_optional doesn't create any semantic change,
     * since non-repeated message fields always track presence. However it still
     * indicates the semantic detail of whether the user wrote "optional" or not.
     * This can be useful for round-tripping the .proto file. For consistency we
     * give message fields a synthetic oneof also, even though it is not required
     * to track presence. This is especially important because the parser can't
     * tell if a field is a message or an enum, so it must always create a
     * synthetic oneof.
     * Proto2 optional fields do not set this flag, because they already indicate
     * optional with `LABEL_OPTIONAL`.
     *
     * Generated from protobuf field <code>optional bool proto3_optional = 17;</code>
     */
    protected $proto3_optional = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $number
     *     @type int $label
     *     @type int $type
     *           If type_name is set, this need not be set.  If both this and type_name
     *           are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *     @type string $type_name
     *           For message and enum types, this is the name of the type.  If the name
     *           starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     *           rules are used to find the type (i.e. first the nested types within this
     *           message are searched, then within the parent, on up to the root
     *           namespace).
     *     @type string $extendee
     *           For extensions, this is the name of the type being extended.  It is
     *           resolved in the same manner as type_name.
     *     @type string $default_value
     *           For numeric types, contains the original text representation of the value.
     *           For booleans, "true" or "false".
     *           For strings, contains the default text contents (not escaped in any way).
     *           For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     *     @type int $oneof_index
     *           If set, gives the index of a oneof in the containing type's oneof_decl
     *           list.  This field is a member of that oneof.
     *     @type string $json_name
     *           JSON name of this field. The value is set by protocol compiler. If the
     *           user has set a "json_name" option on this field, that option's value
     *           will be used. Otherwise, it's deduced from the field's name by converting
     *           it to camelCase.
     *     @type \Google\Protobuf\Internal\FieldOptions $options
     *     @type bool $proto3_optional
     *           If true, this is a proto3 "optional". When a proto3 field is optional, it
     *           tracks presence regardless of field type.
     *           When proto3_optional is true, this field must belong to a oneof to signal
     *           to old proto3 clients that presence is tracked for this field. This oneof
     *           is known as a "synthetic" oneof, and this field must be its sole member
     *           (each proto3 optional field gets its own synthetic oneof). Synthetic oneofs
     *           exist in the descriptor only, and do not generate any API. Synthetic oneofs
     *           must be ordered after all "real" oneofs.
     *           For message fields, proto3_optional doesn't create any semantic change,
     *           since non-repeated message fields always track presence. However it still
     *           indicates the semantic detail of whether the user wrote "optional" or not.
     *           This can be useful for round-tripping the .proto file. For consistency we
     *           give message fields a synthetic oneof also, even though it is not required
     *           to track presence. This is especially important because the parser can't
     *           tell if a field is a message or an enum, so it must always create a
     *           synthetic oneof.
     *           Proto2 optional fields do not set this flag, because they already indicate
     *           optional with `LABEL_OPTIONAL`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 number = 3;</code>
     * @return int
     */
    public function getNumber()
    {
        return isset($this->number) ? $this->number : 0;
    }

    public function hasNumber()
    {
        return isset($this->number);
    }

    public function clearNumber()
    {
        unset($this->number);
    }

    /**
     * Generated from protobuf field <code>optional int32 number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.FieldDescriptorProto.Label label = 4;</code>
     * @return int
     */
    public function getLabel()
    {
        return isset($this->label) ? $this->label : 0;
    }

    public function hasLabel()
    {
        return isset($this->label);
    }

    public function clearLabel()
    {
        unset($this->label);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.FieldDescriptorProto.Label label = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Internal\FieldDescriptorProto\Label::class);
        $this->label = $var;

        return $this;
    }

    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FieldDescriptorProto.Type type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>optional .google.protobuf.FieldDescriptorProto.Type type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Internal\FieldDescriptorProto\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>optional string type_name = 6;</code>
     * @return string
     */
    public function getTypeName()
    {
        return isset($this->type_name) ? $this->type_name : '';
    }

    public function hasTypeName()
    {
        return isset($this->type_name);
    }

    public function clearTypeName()
    {
        unset($this->type_name);
    }

    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>optional string type_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_name = $var;

        return $this;
    }

    /**
     * For extensions, this is the name of the type being extended.  It is
     * resolved in the same manner as type_name.
     *
     * Generated from protobuf field <code>optional string extendee = 2;</code>
     * @return string
     */
    public function getExtendee()
    {
        return isset($this->extendee) ? $this->extendee : '';
    }

    public function hasExtendee()
    {
        return isset($this->extendee);
    }

    public function clearExtendee()
    {
        unset($this->extendee);
    }

    /**
     * For extensions, this is the name of the type being extended.  It is
     * resolved in the same manner as type_name.
     *
     * Generated from protobuf field <code>optional string extendee = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExtendee($var)
    {
        GPBUtil::checkString($var, True);
        $this->extendee = $var;

        return $this;
    }

    /**
     * For numeric types, contains the original text representation of the value.
     * For booleans, "true" or "false".
     * For strings, contains the default text contents (not escaped in any way).
     * For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     *
     * Generated from protobuf field <code>optional string default_value = 7;</code>
     * @return string
     */
    public function getDefaultValue()
    {
        return isset($this->default_value) ? $this->default_value : '';
    }

    public function hasDefaultValue()
    {
        return isset($this->default_value);
    }

    public function clearDefaultValue()
    {
        unset($this->default_value);
    }

    /**
     * For numeric types, contains the original text representation of the value.
     * For booleans, "true" or "false".
     * For strings, contains the default text contents (not escaped in any way).
     * For bytes, contains the C escaped value.  All bytes >= 128 are escaped.
     *
     * Generated from protobuf field <code>optional string default_value = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_value = $var;

        return $this;
    }

    /**
     * If set, gives the index of a oneof in the containing type's oneof_decl
     * list.  This field is a member of that oneof.
     *
     * Generated from protobuf field <code>optional int32 oneof_index = 9;</code>
     * @return int
     */
    public function getOneofIndex()
    {
        return isset($this->oneof_index) ? $this->oneof_index : 0;
    }

    public function hasOneofIndex()
    {
        return isset($this->oneof_index);
    }

    public function clearOneofIndex()
    {
        unset($this->oneof_index);
    }

    /**
     * If set, gives the index of a oneof in the containing type's oneof_decl
     * list.  This field is a member of that oneof.
     *
     * Generated from protobuf field <code>optional int32 oneof_index = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOneofIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->oneof_index = $var;

        return $this;
    }

    /**
     * JSON name of this field. The value is set by protocol compiler. If the
     * user has set a "json_name" option on this field, that option's value
     * will be used. Otherwise, it's deduced from the field's name by converting
     * it to camelCase.
     *
     * Generated from protobuf field <code>optional string json_name = 10;</code>
     * @return string
     */
    public function getJsonName()
    {
        return isset($this->json_name) ? $this->json_name : '';
    }

    public function hasJsonName()
    {
        return isset($this->json_name);
    }

    public function clearJsonName()
    {
        unset($this->json_name);
    }

    /**
     * JSON name of this field. The value is set by protocol compiler. If the
     * user has set a "json_name" option on this field, that option's value
     * will be used. Otherwise, it's deduced from the field's name by converting
     * it to camelCase.
     *
     * Generated from protobuf field <code>optional string json_name = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setJsonName($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.FieldOptions options = 8;</code>
     * @return \Google\Protobuf\Internal\FieldOptions|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.FieldOptions options = 8;</code>
     * @param \Google\Protobuf\Internal\FieldOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Internal\FieldOptions::class);
        $this->options = $var;

        return $this;
    }

    /**
     * If true, this is a proto3 "optional". When a proto3 field is optional, it
     * tracks presence regardless of field type.
     * When proto3_optional is true, this field must belong to a oneof to signal
     * to old proto3 clients that presence is tracked for this field. This oneof
     * is known as a "synthetic" oneof, and this field must be its sole member
     * (each proto3 optional field gets its own synthetic oneof). Synthetic oneofs
     * exist in the descriptor only, and do not generate any API. Synthetic oneofs
     * must be ordered after all "real" oneofs.
     * For message fields, proto3_optional doesn't create any semantic change,
     * since non-repeated message fields always track presence. However it still
     * indicates the semantic detail of whether the user wrote "optional" or not.
     * This can be useful for round-tripping the .proto file. For consistency we
     * give message fields a synthetic oneof also, even though it is not required
     * to track presence. This is especially important because the parser can't
     * tell if a field is a message or an enum, so it must always create a
     * synthetic oneof.
     * Proto2 optional fields do not set this flag, because they already indicate
     * optional with `LABEL_OPTIONAL`.
     *
     * Generated from protobuf field <code>optional bool proto3_optional = 17;</code>
     * @return bool
     */
    public function getProto3Optional()
    {
        return isset($this->proto3_optional) ? $this->proto3_optional : false;
    }

    public function hasProto3Optional()
    {
        return isset($this->proto3_optional);
    }

    public function clearProto3Optional()
    {
        unset($this->proto3_optional);
    }

    /**
     * If true, this is a proto3 "optional". When a proto3 field is optional, it
     * tracks presence regardless of field type.
     * When proto3_optional is true, this field must belong to a oneof to signal
     * to old proto3 clients that presence is tracked for this field. This oneof
     * is known as a "synthetic" oneof, and this field must be its sole member
     * (each proto3 optional field gets its own synthetic oneof). Synthetic oneofs
     * exist in the descriptor only, and do not generate any API. Synthetic oneofs
     * must be ordered after all "real" oneofs.
     * For message fields, proto3_optional doesn't create any semantic change,
     * since non-repeated message fields always track presence. However it still
     * indicates the semantic detail of whether the user wrote "optional" or not.
     * This can be useful for round-tripping the .proto file. For consistency we
     * give message fields a synthetic oneof also, even though it is not required
     * to track presence. This is especially important because the parser can't
     * tell if a field is a message or an enum, so it must always create a
     * synthetic oneof.
     * Proto2 optional fields do not set this flag, because they already indicate
     * optional with `LABEL_OPTIONAL`.
     *
     * Generated from protobuf field <code>optional bool proto3_optional = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setProto3Optional($var)
    {
        GPBUtil::checkBool($var);
        $this->proto3_optional = $var;

        return $this;
    }

}

