<?php


?>
<footer>
    <div class="foot d-flex">

        <div class="bottom-foot container d-flex">

            <div class="legal">
                <h3>Boolando s.r.l.</h3>
                    <div>
                        informazioni legali normativa sulla privacy Diritto di  recessi
                    </div>
            </div>

                <div class="social">
                    <h5>Trovaci anche su</h5>
                    <a v-for="(item, index) in menuFontAweFooter" :key="index" :href="item.href">
                    <i :class="item.font"></i>
                    </a>
                </div>

        </div>

    </div>

</footer>
