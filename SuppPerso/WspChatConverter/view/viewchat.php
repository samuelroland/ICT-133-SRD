<?php
/**
 *  Projet: permet de voir le chat de WspChatConverter
 *  Filename: ICT-133-SRD
 *  Author: Samuel Roland
 *  Creation date: 20.12.2019
 */

//Générer le contenu de la partie chat en HTML:
ob_start();

foreach ($chatdata as $msginrun) {
    if ($msginrun['author']!="Tziix") {
        //if ($msginrun['type']=="SystemBleu"){
//
        //} if ($msginrun['type']=="SystemBleu"){
//
        //} if ($msginrun['type']=="SystemBleu"){
//
        //} if ($msginrun['type']=="SystemBleu"){
//
        //}
        //if ()
        ?>

        <div class="FTBzM _4jEk2 message-in"><span></span>
            <div class="_1zGQT _2ugFP tail"><span class="tail-container"></span><span
                        class="tail-container highlight"></span>
                <div class="_2Wx_5 _3LG3B">
                    <div class="-N6Gq">
                        <div class="copyable-text" data-pre-plain-text="
                        <?php
                        //Imprimer sous ce format "[21:38, 17.12.2019] Tziix: "
                        echo "[";
                        echo date("H:i, d.M.y", strtotime($msginrun['time']));
                        echo "] ";
                        echo $msginrun['author'];
                        ?>
                        ">
                            <div class="_12pGw" dir="ltr"><span dir="ltr"
                                                                class="_F7Vk selectable-text invisible-space copyable-text"><span><?= $msginrun['msg'] ?></span></span><span
                                        class="EopGb"></span></div>
                        </div>
                        <div class="_1RNhZ">
                            <div class="_3MYI2"><span class="_3fnHB"
                                                      dir="auto"><? date("H:i", strtotime($msginrun['time'])) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <span></span></div>
        </div>

        <?php
    } else { ?>
        <div class="FTBzM message-out"><span></span>
            <div class="_1zGQT _2ugFP tail"><span class="tail-container"></span><span
                        class="tail-container highlight"></span>
                <div class="_2Wx_5 _3LG3B">
                    <div class="-N6Gq">
                        <div class="copyable-text"
                             data-pre-plain-text="<?php
                             //Imprimer sous ce format "[21:38, 17.12.2019] SLynux: "
                             echo "[";
                             echo date("H:i, d.M.y", strtotime($msginrun['time']));
                             echo "] ";
                             echo $msginrun['author'];
                             ?>
">
                            <div class="_12pGw" dir="ltr"><span dir="ltr"
                                                                class="_F7Vk selectable-text invisible-space copyable-text"><span><?= $msginrun['msg'] ?></span></span><span
                                        class="EopGb _3HIqo"></span></div>
                        </div>
                        <div class="_1RNhZ">
                            <div class="_3MYI2" role="button"><span class="_3fnHB"
                                                                    dir="auto"><? date("H:i", strtotime($msginrun['time'])) ?></span>
                                <div class="_370iZ"><span data-icon="msg-dblcheck-ack"
                                                          class=""><svg id="Layer_1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 16 15"
                                                                        width="16"
                                                                        height="15"><path fill="#4FC3F7"
                                                                                          d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span></span></div>
        </div>

        <?php
    }
}


$chatcontent = ob_get_clean();

require_once 'gabarit.php'
?>