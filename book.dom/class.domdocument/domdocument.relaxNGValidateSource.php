<?php
$doc = new DOMDocument;
$doc->load('../book.xml');

$rng = <<<RNG
<element name="book" xmlns="http://relaxng.org/ns/structure/1.0">
    <attribute name="id"/>
    <element name="title">
        <text/>
    </element>
    <element name="chapter">
        <attribute name="id"/>
        <element name="title">
            <text/>
        </element>
        <optional>
            <element name="para">
                <element name="informaltable">
                    <element name="tgroup">
                        <attribute name="cols"/>
                        <element name="thead">
                            <element name="row">
                                <element name="entry">
                                    <text/>
                                </element>
                                <element name="entry">
                                    <text/>
                                </element>
                                <element name="entry">
                                    <text/>
                                </element>
                                <element name="entry">
                                    <text/>
                                </element>
                            </element>
                        </element>
                        <element name="tbody">
                            <zeroOrMore>
                                <element name="row">
                                    <element name="entry">
                                        <text/>
                                    </element>
                                    <element name="entry">
                                        <text/>
                                    </element>
                                    <element name="entry">
                                        <text/>
                                    </element>
                                    <element name="entry">
                                        <text/>
                                    </element>
                                </element>
                            </zeroOrMore>
                        </element>
                    </element>
                </element>
            </element>
        </optional>
    </element>
</element>
RNG;

if ($doc->relaxNGValidateSource($rng)) {
    echo "This document is valid!\n";
}

?>