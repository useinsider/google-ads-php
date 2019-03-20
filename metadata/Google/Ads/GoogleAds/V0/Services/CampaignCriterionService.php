<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/campaign_criterion_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Services;

class CampaignCriterionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\CampaignCriterion::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a820d0a41676f6f676c652f6164732f676f6f676c656164732f76302f73" .
            "657276696365732f63616d706169676e5f637269746572696f6e5f736572" .
            "766963652e70726f746f1220676f6f676c652e6164732e676f6f676c6561" .
            "64732e76302e73657276696365731a1c676f6f676c652f6170692f616e6e" .
            "6f746174696f6e732e70726f746f1a20676f6f676c652f70726f746f6275" .
            "662f6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f77726170706572732e70726f746f1a17676f6f676c652f72" .
            "70632f7374617475732e70726f746f22340a1b47657443616d706169676e" .
            "437269746572696f6e5265717565737412150a0d7265736f757263655f6e" .
            "616d6518012001280922b6010a1d4d757461746543616d706169676e4372" .
            "6974657269615265717565737412130a0b637573746f6d65725f69641801" .
            "2001280912500a0a6f7065726174696f6e7318022003280b323c2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e73657276696365732e" .
            "43616d706169676e437269746572696f6e4f7065726174696f6e12170a0f" .
            "7061727469616c5f6661696c75726518032001280812150a0d76616c6964" .
            "6174655f6f6e6c7918042001280822fc010a1a43616d706169676e437269" .
            "746572696f6e4f7065726174696f6e122f0a0b7570646174655f6d61736b" .
            "18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c64" .
            "4d61736b12460a0663726561746518012001280b32342e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e7265736f75726365732e43616d" .
            "706169676e437269746572696f6e480012460a0675706461746518022001" .
            "280b32342e676f6f676c652e6164732e676f6f676c656164732e76302e72" .
            "65736f75726365732e43616d706169676e437269746572696f6e48001210" .
            "0a0672656d6f76651803200128094800420b0a096f7065726174696f6e22" .
            "a5010a1e4d757461746543616d706169676e437269746572696152657370" .
            "6f6e736512310a157061727469616c5f6661696c7572655f6572726f7218" .
            "032001280b32122e676f6f676c652e7270632e53746174757312500a0772" .
            "6573756c747318022003280b323f2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76302e73657276696365732e4d757461746543616d706169" .
            "676e437269746572696f6e526573756c7422360a1d4d757461746543616d" .
            "706169676e437269746572696f6e526573756c7412150a0d7265736f7572" .
            "63655f6e616d6518012001280932c4030a1843616d706169676e43726974" .
            "6572696f6e5365727669636512c7010a1447657443616d706169676e4372" .
            "69746572696f6e123d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e73657276696365732e47657443616d706169676e437269746572" .
            "696f6e526571756573741a342e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e7265736f75726365732e43616d706169676e4372697465" .
            "72696f6e223a82d3e493023412322f76302f7b7265736f757263655f6e61" .
            "6d653d637573746f6d6572732f2a2f63616d706169676e43726974657269" .
            "612f2a7d12dd010a164d757461746543616d706169676e43726974657269" .
            "61123f2e676f6f676c652e6164732e676f6f676c656164732e76302e7365" .
            "7276696365732e4d757461746543616d706169676e437269746572696152" .
            "6571756573741a402e676f6f676c652e6164732e676f6f676c656164732e" .
            "76302e73657276696365732e4d757461746543616d706169676e43726974" .
            "65726961526573706f6e7365224082d3e493023a22352f76302f63757374" .
            "6f6d6572732f7b637573746f6d65725f69643d2a7d2f63616d706169676e" .
            "43726974657269613a6d75746174653a012a4284020a24636f6d2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e736572766963657342" .
            "1d43616d706169676e437269746572696f6e5365727669636550726f746f" .
            "50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f" .
            "2f676f6f676c65617069732f6164732f676f6f676c656164732f76302f73" .
            "657276696365733b7365727669636573a20203474141aa0220476f6f676c" .
            "652e4164732e476f6f676c654164732e56302e5365727669636573ca0220" .
            "476f6f676c655c4164735c476f6f676c654164735c56305c536572766963" .
            "6573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56" .
            "303a3a5365727669636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
