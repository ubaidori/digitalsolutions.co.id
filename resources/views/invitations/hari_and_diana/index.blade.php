<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Wedding of Diana & Hari</title>
    <meta name="description" content="Rabu, 21 Januari 2026" />

    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Montserrat:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Allison&family=Euphoria+Script&family=Ms+Madi&display=swap"
      rel="stylesheet"
    />

    <style>
      :root {
        --black: #0f0f0f;
        --white: #ffffff;
        --gray: #bfbfbf;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
      }

      body {
        max-width: 720px;
        margin: 0 auto;
        font-family: "Montserrat", sans-serif;
        /* background: var(--black); */
        background: url("/diana_and_hari/assets/img/bg3.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        color: var(--black);
        overflow: hidden;
        /* dikunci sampai undangan dibuka */
      }

      .separator {
        display: flex;
        align-items: center;
        text-align: center;
        font-size: 50px;
        margin-right: 25px;
        margin-left: 25px;
        margin-top: 50px;
      }

      .separator::before,
      .separator::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid #000;
      }

      .separator:not(:empty)::before {
        margin-right: 0.25em;
      }

      .separator:not(:empty)::after {
        margin-left: 0.25em;
      }

      .euphoria-script-regular {
        font-family: "Euphoria Script", cursive;
        font-weight: 400;
        font-style: normal;
      }

      .ms-madi-regular {
        font-family: "Ms Madi", cursive;
        font-weight: 400;
        font-style: normal;
      }

      .allison-regular {
        font-family: "Allison", cursive;
        font-weight: 400;
        font-style: normal;
        font-size: 50px;
      }

      h1,
      h2,
      h3 {
        font-family: "Playfair Display", serif;
        letter-spacing: 1px;
      }

      section {
        padding: 70px 20px;
        text-align: center;
        animation: fadeUp 1s ease;
      }

      img {
        max-width: 100%;
        display: block;
      }

      /* ===== COVER ===== */
      .cover {
        position: fixed;
        inset: 0;
        background: url("/diana_and_hari/assets/img/cover.jpeg") center/cover
          no-repeat;
        display: flex;
        align-items: end;
        justify-content: center;
        z-index: 999;
        color: var(--white);
      }

      .cover::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        pointer-events: none;
        /* INI YANG FIX */
      }

      .cover-content {
        position: relative;
        z-index: 2;
        text-align: center;
        animation: fadeUp 1.2s ease;
        margin-bottom: 50px;
      }

      .cover h1 {
        font-size: 20px;
      }

      .cover p {
        margin: 12px 0;
        color: var(--gray);
      }

      .btn-open {
        margin-top: 30px;
        padding: 12px 32px;
        border: 1px solid var(--white);
        background: transparent;
        color: var(--white);
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: 0.3s;
      }

      .btn-open:hover {
        background: var(--white);
        color: var(--black);
      }

      /* ===== HERO ===== */
      .hero {
        position: relative;
        background: url("/diana_and_hari/assets/img/main.jpeg") center/cover
          no-repeat;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: end;
        color: var(--white);
      }

      .hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.3);
      }

      .hero > * {
        position: relative;
        z-index: 2;
      }

      .countdown {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 20px;
      }

      .countdown div {
        border: 1px solid var(--gray);
        padding: 10px;
        min-width: 60px;
      }

      /* ===== QURAN ===== */
      .arch-img {
        border-radius: 100% 100% 0 0;
        overflow: hidden;
        margin-bottom: 20px;
        margin: 0px 50px 20px 50px;
      }

      .arabic {
        font-size: 18px;
        font-weight: 400;
      }

      .quran p {
        margin: 0px 50px 20px 50px;
      }

      /* ===== COUPLE ===== */
      .couple_section {
        position: relative;
        /* background-color: #707070; */
        /* background-color: #404042; */
        /* background-color: #ececec; */
        background: url("/diana_and_hari/assets/img/abstract-bg.jpg")
          center/cover no-repeat;
        /* color: #d7d6cb; */
        color: #404042;
        padding-top: 120px;
        padding-bottom: 120px;
      }

      .couple_and_name {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
      }

      .flower-bg {
        position: absolute;
        left: 0;
        width: 100%;
        z-index: 1;
        pointer-events: none;
      }

      @media screen and (min-width: 525px) {
        .flower-bg {
          display: none;
        }
      }

      .flower-top {
        top: -85px;
      }

      .flower-bottom {
        bottom: -85px;
      }

      .both-couple {
        /* background: url("/diana_and_hari/assets/img/bride_and_groom.jpg"); */
      }

      .both-couple img {
        padding: 0px -20px 0px -20px !important;
      }

      .couple {
        /* display: grid;
      gap: 40px; */
        /* margin-top: 30px; */
      }

      .person {
        /* overflow: hidden;
      background: #000; */
      }

      .person img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* THIS is crucial */
        width: 260px;
        height: 350px;
        aspect-ratio: 3 / 4.5; /* tall oval like your image */
        border-radius: 48% 48% / 50% 50%;
        border: 4px solid var(--white);
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 16px;
      }

      /* ===== EVENT ===== */
      .event-card {
        border: 1px solid var(--gray);
        padding: 20px;
        background-color: #ececec;
        color: #404042;
        border-radius: 12px;
        margin-top: 20px;
      }

      .event-date {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
      }

      .event-date span {
        font-weight: 600;
      }

      .event-date .day {
        font-size: 24px;
      }

      .event-date .month,
      .event-date .year {
        font-size: 14px;
      }

      .gmap-btn {
        padding: 4px 8px;
        border: 1px solid var(--gray);
        color: #404042;
        border-radius: 12px;
        align-items: center;
      }

      /* ===== GALLERY ===== */
      .gallery {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
      }

      /* ===== GIFT ===== */
      .gift-card {
        border: 1px solid var(--white);
        padding: 20px;
        border-radius: 12px;
      }

      footer {
        padding: 40px 40px;
        font-size: 15px;
        text-align: center;
        color: #404042;
      }
      
      .footer {
        background-color: #404042;
        color: #ececec;
        text-align: center;
        padding: 15px 0px;
        font-size: 10px;
      }

      @keyframes fadeUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @media (min-width: 768px) {
        .gallery {
          grid-template-columns: repeat(4, 1fr);
        }

        .couple {
          grid-template-columns: repeat(2, 1fr);
        }
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
      }

      .container .card {
        position: relative;
        width: 280px;
        height: 350px;
        margin: 30px;
      }

      .container .card .image {
        position: relative;
        width: 100%;
        height: 100%;
        background-size: cover;
        transform: translate(-10px, -10px);
      }

      .container .card:before {
        content: "";
        position: absolute;
        top: -20px;
        left: -20px;
        width: 255px;
        height: 325px;
        border: 25px solid #fff;
        z-index: 1;
        background: linear-gradient(145deg, #ffffff, #e6e6e6);
        box-shadow: 7px 7px 21px #bdbdbd, -7px -7px 21px #ffffff;
        background: transparent;
      }

      .container .card:nth-of-type(1)::before {
        filter: url(#wavy1);
      }

      .image1 {
        background-image: url("/diana_and_hari/assets/img/groom1.jpg");
      }
      .image2 {
        background-image: url("/diana_and_hari/assets/img/bride1.jpg");
      }

      svg {
        width: 0;
        height: 0;
      }
    </style>
  </head>

  <body>
    <!-- MUSIC -->
    <audio id="music" loop>
      <source
        src="/diana_and_hari/assets/audio/pernikahan_kita.mp3"
        type="audio/mpeg"
      />
    </audio>

    <!-- COVER -->
    <div class="cover" id="cover">
      <div class="cover-content">
        <p>You are invited to the wedding of</p>
        <h1 class="ms-madi-regular" style="font-size: 50px">Hari & Diana</h1>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <p>Kepada Yth Bapak/Ibu/Saudara/i</p>
        <h1></h1>
        <p>Di Tempat</p>
        <button class="btn-open" onclick="openInvitation()">
          Buka Undangan
        </button>
      </div>
    </div>

    <!-- HERO -->
    <section class="hero">
      <h1>Hari & Diana</h1>
      <p>21 Januari 2026</p>
      <div class="countdown" id="countdown"></div>
    </section>

    <!-- QURAN -->
    <section class="quran">
      <div class="arch-img">
        <img src="/diana_and_hari/assets/img/arch.jpeg" alt="" />
      </div>
      <p class="arabic">
        وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا
        لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةً
        ۗاِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ
      </p>
      <br />
      <p>
        <em>
          "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
          pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung
          dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa
          kasih dan sayang."
        </em>
      </p>
      <p><em>QS. Ar-Rum : 21</em></p>
    </section>

    <!-- COUPLE -->
    <section class="couple_section">
      <img
        src="/diana_and_hari/assets/img/top-flower2.png"
        class="flower-bg flower-top"
        alt=""
      />
      <h2 class="allison-regular">Bismillahirrahamanirrahim</h2>
      <p>
        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, insyaaAllah
        kami akan menyelenggarakan acara pernikahan :
      </p>
      <!-- <div class="both-couple">
        <img src="/diana_and_hari/assets/img/bride_and_groom.jpg" alt="" />
      </div> -->
      <div
        class="couple_and_name"
        style="margin-top: 30px; margin-bottom: 20px"
      >
        <div style="flex: 1">
          <img
            src="/diana_and_hari/assets/img/bride_and_groom.jpg"
            alt=""
            style="border-radius: 5px"
          />
        </div>
        <div style="flex: 1">
          <div class="couple">
            <div class="person">
              <!-- <img src="/diana_and_hari/assets/img/groom1.jpg"> -->

              <h3>Moh. Hariyanto, S.Kom</h3>
              <p>Putra dari</p>
              <p>Bapak Moh. Tahir & Ibu Rasuma</p>
            </div>
            <br />

            <div class="euphoria-script-regular" style="font-size: 30px">
              dengan
            </div>

            <br />
            <div class="person">
              <!-- <img src="/diana_and_hari/assets/img/bride1.jpg"> -->

              <h3>Diana Atika, S.E</h3>
              <p>Putri dari</p>
              <p>Alm. Bapak Edi Masyono & Ibu Maniya</p>
            </div>
          </div>
        </div>
      </div>
      <img
        src="/diana_and_hari/assets/img/bottom-flower2.png"
        class="flower-bg flower-bottom"
        alt=""
      />
    </section>
    <br />
    <br />
    <div class="separator ms-madi-regular">Save The Date</div>
    <p style="width: 250px; text-align: center; margin: 15px auto 0 auto">
      Kami akan menikah, dan kami ingin Anda menjadi bagian dari hari istimewa
      kami
    </p>
    <p style="width: 250px; text-align: center; margin: 15px auto 0 auto">
      Yang insyaaAllah akan dilaksanakan pada:
    </p>

    <!-- EVENT -->

    <section>
      <h2 class="allison-regular">Akad Nikah</h2>
      <div class="event-card">
        <p><strong>Rabu</strong></p>

        <div class="event-date">
          <span class="day">21</span>
          <span class="month">Januari</span>
          <span class="year">2026</span>
        </div>

        <!-- <p>21 Januari 2026</p> -->
        <p>09.00 WIB</p>
        <br />
        <hr />
        <br />
        <p>Kediaman Mempelai Wanita</p>
        <p>Banasare Rubaru Sumenep</p>
        <br />
        <a
          href="https://maps.app.goo.gl/wck5ebu5U9v4u356A?g_st=ic"
          target="_blank"
        >
          <button class="gmap-btn">
            <!-- Buka di -->
            <img
              src="/diana_and_hari/assets/img/gmap.png"
              alt=""
              style="width: auto; height: 20px; display: inline"
            />
          </button>
        </a>
      </div>
    </section>
    <section>
      <h2 class="allison-regular">Resepsi</h2>
      <div class="event-card">
        <p><strong>Rabu</strong></p>

        <div class="event-date">
          <span class="day">21</span>
          <span class="month">Januari</span>
          <span class="year">2026</span>
        </div>

        <!-- <p>21 Januari 2026</p> -->
        <p>10.00 WIB</p>
        <br />
        <hr />
        <br />
        <p>Kediaman Mempelai Wanita</p>
        <p>Banasare Rubaru Sumenep</p>
        <br />
        <a
          href="https://maps.app.goo.gl/wck5ebu5U9v4u356A?g_st=ic"
          target="_blank"
        >
          <button class="gmap-btn">
            <!-- Buka di -->
            <img
              src="/diana_and_hari/assets/img/gmap.png"
              alt=""
              style="width: auto; height: 20px; display: inline"
            />
          </button>
        </a>
      </div>
    </section>

    <!-- GALLERY -->
    <section>
      <!-- <h2>Gallery</h2> -->
      <div class="gallery">
        <img src="/diana_and_hari/assets/img/g1.jpeg" />
        <img src="/diana_and_hari/assets/img/g2.jpeg" />
        <img src="/diana_and_hari/assets/img/g3.jpeg" />
        <img src="/diana_and_hari/assets/img/g4.jpeg" />
        <img src="/diana_and_hari/assets/img/g5.jpeg" />
        <img src="/diana_and_hari/assets/img/g6.jpeg" />
        <img src="/diana_and_hari/assets/img/main.jpeg" />
        <img src="/diana_and_hari/assets/img/arch.jpeg" />
      </div>
    </section>

    <!-- GIFT -->
    <section>
      <!-- <h2>Virtual Gift</h2> -->
      <h2 class="allison-regular">Wedding Gift</h2>
      <p>
        Jika memberi adalah tanda kasih anda, anda dapat memberikan hadiah
        secara cashless ke rekening mempelai
      </p>
      <br />
      <div class="event-card">
        <p>Bank BRI</p>
        <p>009501067357506</p>
        <p>a.n DIANA ATIKA</p>
      </div>
      <div class="event-card">
        <p>Dana</p>
        <p>085959100913</p>
        <p>a.n MOH HARIYANTO</p>
      </div>
    </section>

    <footer>
      Atas kehadiran dan do’a restu dari Bapak/Ibu/Saudara/i sekalian, kami
      mengucapkan
      <h2 class="allison-regular">Terima kasih</h2>
    </footer>
    
    <div class="footer">Crafted by digitalsolutions.co.id</div>

    <script>
      function openInvitation() {
        document.getElementById("cover").style.display = "none";
        document.getElementById("music").play();
        document.body.style.overflow = "auto";
      }

      const targetDate = new Date("2026-01-21T09:00:00").getTime();
      const countdownEl = document.getElementById("countdown");

      setInterval(() => {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
          countdownEl.innerHTML = "Acara telah dimulai";
          return;
        }

        const d = Math.floor(distance / (1000 * 60 * 60 * 24));
        const h = Math.floor((distance / (1000 * 60 * 60)) % 24);
        const m = Math.floor((distance / (1000 * 60)) % 60);
        const s = Math.floor((distance / 1000) % 60);

        countdownEl.innerHTML = `
      <div>${d}<br>Hari</div>
      <div>${h}<br>Jam</div>
      <div>${m}<br>Menit</div>
      <div>${s}<br>Detik</div>
    `;
      }, 1000);
    </script>
  </body>
</html>
