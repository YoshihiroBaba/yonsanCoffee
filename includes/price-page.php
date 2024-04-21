<section class="l-system">
          <div class="l-system__inner">
            <h2 class="l-system__ttl">コーヒーの定期便</h2>
            <div class="l-system__wrapper">
              <div class="l-system__box">
                <h4 class="l-system__box__txt">毎月の料金</h4>
              </div>
              <div class="l-system__plus"></div>
              <div class="l-system__box">
                <h4 class="l-system__box__txt">送料無料</h4>
              </div>
            </div>
            <p class="l-system__copy">たくさんのプランを自由にカスタマイズしてサブスク。<br>あなたのライフスタイルに合わせたプランをお選びください。<br>おすすめのプランをご紹介します。</p>
          </div><!-- /.l-system__inner -->
        </section><!-- /.l-system -->
        <section class="l-list">
          <div class="l-list__inner">
            <h2 class="l-list__ttl">プラン</h2>
            <div class="l-list__scroll">
              <div class="l-list__wrapper">
                <div class="l-list__box">
                  <div class="l-list__box__ttl-bg">
                    <h3 class="l-list__box__ttl">週末プラン</h3>
                  </div>
                  <h4 class="l-list__box__price"><?php $price = get_field('週末プラン'); echo number_format($price); ?>円</h4>
                  <p class="l-list__box__price-txt">*月額（税込）</p>
                  <div class="l-list__box__body">
                    <p class="l-list__box__body-txt--1">色んなコーヒーを<br>少しずつ試せる</p>
                    <p class="l-list__box__body-txt">約<span>15</span>杯分</p>
                    <p class="l-list__box__body-txt">225g(75g ✖︎ 3種類)</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
                <div class="l-list__box--recommend">
                  <div class="l-list__box__ttl-bg--recommend">
                    <h3 class="l-list__box__ttl--recommend">おすすめ<br>毎日プラン</h3>
                  </div>
                  <h4 class="l-list__box__price--recommend"><?php $practice = get_field('毎日プラン'); echo number_format($practice); ?>円</h4>
                  <p class="l-list__box__price-txt">*月額（税込）</p>
                  <div class="l-list__box__body">
                  <p class="l-list__box__body-txt--1">毎朝のコーヒー選び<br>を楽しめる</p>
                    <p class="l-list__box__body-txt">約<span>30</span>杯分</p>
                    <p class="l-list__box__body-txt">450g(150g ✖︎ 3種類)</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
                <div class="l-list__box">
                  <div class="l-list__box__ttl-bg">
                    <h3 class="l-list__box__ttl">ファミリープラン</h3>
                  </div>
                  <h4 class="l-list__box__price"><?php $recommend = get_field('ファミリープラン'); echo number_format($recommend); ?>円</h4>
                  <p class="l-list__box__price-txt">*月額（税込）</p>
                  <div class="l-list__box__body">
                  <p class="l-list__box__body-txt--1">コーヒー生活が<br>さらに豊かに</p>
                    <p class="l-list__box__body-txt">約<span>60</span>杯分</p>
                    <p class="l-list__box__body-txt">900g(300g ✖︎ 3種類)</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
                <div class="l-list__box">
                  <div class="l-list__box__ttl-bg">
                    <h3 class="l-list__box__ttl">カスタマイズプラン</h3>
                  </div>
                  <h4 class="l-list__box__price"><?php $flex = get_field('カスタマイズプラン'); echo number_format($flex); ?>円~</h4>
                  <p class="l-list__box__price-txt">*月額（税込）</p>
                  <div class="l-list__box__body">
                    <p class="l-list__box__body-txt--none">＊別途ご相談ください</p>
                  </div><!-- /.l-list__box__body -->
                </div><!-- /.l-list__box -->
              </div><!-- /.l-list__wrapper -->
            </div><!-- /.l-list__scrool -->
          </div><!-- /.l-list__inner -->
        </section><!-- /.l-list -->
