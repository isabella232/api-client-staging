<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Alternative hypotheses (a.k.a. n-best list).
 *
 * Protobuf type <code>Google\Cloud\Speech\V1beta1\SpeechRecognitionAlternative</code>
 */
class SpeechRecognitionAlternative extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* Transcript text representing the words that the user spoke.
     *
     * Generated from protobuf field <code>string transcript = 1;</code>
     */
    private $transcript = '';
    /**
     * *Output-only* The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is typically provided only for the top hypothesis, and
     * only for `is_final=true` results. Clients should not rely on the
     * `confidence` field as it is not guaranteed to be accurate, or even set, in
     * any of the results.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * *Output-only* Transcript text representing the words that the user spoke.
     *
     * Generated from protobuf field <code>string transcript = 1;</code>
     * @return string
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    /**
     * *Output-only* Transcript text representing the words that the user spoke.
     *
     * Generated from protobuf field <code>string transcript = 1;</code>
     * @param string $var
     */
    public function setTranscript($var)
    {
        GPBUtil::checkString($var, True);
        $this->transcript = $var;
    }

    /**
     * *Output-only* The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is typically provided only for the top hypothesis, and
     * only for `is_final=true` results. Clients should not rely on the
     * `confidence` field as it is not guaranteed to be accurate, or even set, in
     * any of the results.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * *Output-only* The confidence estimate between 0.0 and 1.0. A higher number
     * indicates an estimated greater likelihood that the recognized words are
     * correct. This field is typically provided only for the top hypothesis, and
     * only for `is_final=true` results. Clients should not rely on the
     * `confidence` field as it is not guaranteed to be accurate, or even set, in
     * any of the results.
     * The default of 0.0 is a sentinel value indicating `confidence` was not set.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;
    }

}

