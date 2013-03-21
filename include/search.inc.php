<?php

echo '<div id="search">
                <form id="frm_search">
                    <div id="bsc_search">
                        <input type="text" id="txt_search" name="txt_search" placeholder="Search the legal code" />
                        <input type="button" id="btn_search" name="btn_search" value="Search" />
                        <div id="adv_option">
                            <label for="cbk_adv">Advanced Search</label>
                            <input type="checkbox" id="cbk_adv" name="chk_adv" value="1" />
                        </div> <!-- /adv_option -->
                    </div> <!-- /bsc_search -->
                    <div id="adv_search">
                        <fieldset id="adv_fields">
                            <legend>Advanced Search</legend>
                            <label for="sel_code">Choose a Code:</label>
                            <select id="sel_code" name="sel_code">
                                <optgroup label="Federal"><option value="fcc" id="crim_code"></option></optgroup>
                                <optgroup label="Quebec"><option value="qcc" id="qcc" selected="selected">Quebec Civil Code</option></optgroup>
                                <optgroup label="Ontario"></optgroup>
                            </select>
                            <label for="sel_search">Search in:</label>
                            <input type="radio" name="">

                        </fieldset>
                    </div> <!-- /adv_search -->
                </form>
            </div> <!-- /search -->';
?>
