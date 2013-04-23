<div id="add_section">
            <form id="frm_add_section" name="frm_add_sections" method="post">
                <label for="sel_law">Law: </label>
                <select name="sel_law" id="sel_law" data-table="laws">
                    <option selected="selected">-- Choose a Law --</option>
                    <?php
                        $law_class = new LawDB();
                        $arr_laws = $law_class->selLaws();
                        foreach($arr_laws as $l) : ?>
                        <option class="law" value="<?php echo $l->getLaw_id(); ?>"><?php echo $l->getLaw_name(); ?></option>
                    <?php endforeach; ?>
                </select>
                <br />
                <label for="sel_book">Book: </label>
                <select name="sel_book" id="sel_book" data-table="books">
                    <option selected="selected">-- Choose a Law First --</option>
                </select>
                <br />
                <label for="sel_title">Title: </label>
                <select name="sel_title" id="sel_title" data-table="titles">
                    <option selected="selected">-- Choose a Book First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_title" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sel_ch">Chapter: </label>
                <select name="sel_ch" id="sel_ch" data-table="chapters">
                    <option selected="selected">-- Choose a Title First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_ch" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sel_div">Division: </label>
                <select name="sel_div" id="sel_div" data-table="divisions">
                    <option selected="selected">-- Choose a Chapter First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_div" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sel_sub_div">Sub-Division: </label>
                <select name="sel_sub_div" id="sel_sub_div" data-table="subdivisions">
                    <option selected="selected">-- Choose a Division First --</option>
                </select>
                <input type="button" class="btn_add_meta" id="btn_add_sub_div" value="add">
                <input type="button" class="btn_refresh" value="refresh">
                <br />
                <label for="sec_num">Section #: </label>
                <input type="text" id="sec_num" name="sec_num">
                <br/>
                <label for="sec_title">Section Title: </label>
                <input type="text" id="sec_title" name="sec_title">
                <br/>
                <label for="sec_text">Section Text: </label>
                <textarea id="sec_text" name="sec_text" cols="35" rows="10" ></textarea>
                <br/>
                <label for="enact_yr">Year of Enactment: </label>
                <input type="text" id="enact_yr" name="enact_yr">
                <br/>
                <label for="enact_bill">Bill enacted: </label>
                <input type="text" id="enact_bill" name="enact_bill">
                <br>
                <label for="enact_sec">Section Enacted: </label>
                <input type="text" id="enact_sec" name="enact_sec">
                <br>
                <input type="button" id="btn_ins_sec" value="submit">
            </form>
        </div> <!-- /add_section -->
        <p class="test"></p>

        <div id="add" style="display:none;">
            <form id="add_meta" method="post" name="add_meta">
                <h3 id="add_meta_head"></h3>
                <br />
                <input type="hidden" id="meta_id" name="meta_id">
                <input type="hidden" id="meta_table" name="meta_table"
                <label for="title_num">Number: </label>
                <input type="text" id="add_num" name="title_num">
                <br/>
                <label for="title_title">Title: </label>
                <input type="text" id="add_title" name="title_title">
            </form>
        </div> <!-- /add -->

        <section>
            <table id="tbl_all_sections">
                <thead>
                    <tr>
                        <th>Sec #</th>
                        <th>Title</th>
                        <th>Section</th>
                        <th>Book</th>
                        <th>Title</th>
                        <th>Chapter</th>
                        <th>Division</th>
                        <th>Sub Division</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sec_class = new SectionDB();
                    $sec_array = $sec_class->selAllFromSections();
                    foreach($sec_array as $s) : ?>
                    <tr>
                        <?php foreach($s as $i){
                            switch($i){
                                case is_a($i, 'section'):
                                    echo "<td>" . $i->getSec_Num() . "</td>";
                                    echo "<td>" . $i->getSec_Title(). "</td>";
                                    echo "<td>" . $i->getSec_Txt() . "</td>";
                                break;
                                case is_a($i, 'book'):
                                    if($i->getBook_Id() > 0){
                                        echo "<td>" . $i->getBook_Num(). ". " . $i->getBook_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'title'):
                                    if($i->getTitle_Id() > 0){
                                        echo "<td>" . $i->getTitle_Num(). ". " . $i->getTitle_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'chapter'):
                                    if($i->getCh_Id() > 0){
                                        echo "<td>" . $i->getCh_Num() . ". " . $i->getCh_Title() . "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'division'):
                                    if($i->getDiv_Id() > 0){
                                        echo "<td>" . $i->getDiv_Num(). ". " . $i->getDiv_Title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                                case is_a($i, 'subdivision'):
                                    if($i->getDiv_Id() > 0){
                                        echo "<td>" . $i->getSub_div_num(). ". " . $i->getSub_div_title(). "</td>";
                                    }else{
                                        echo "<td></td>";
                                    }
                                break;
                            }
                    } ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>