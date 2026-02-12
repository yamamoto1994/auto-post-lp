<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI記事制作サービス｜1本500円から</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #0a0a0a 100%);
      color: #fff;
      font-family: 'Noto Sans JP', 'Hiragino Sans', sans-serif;
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      transition: all 0.3s ease;
    }

    a:hover {
      transform: scale(1.05);
    }

    /* Animations */
    @keyframes pulse {
      0%, 100% { opacity: 0.5; transform: scale(1); }
      50% { opacity: 0.8; transform: scale(1.1); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateX(-50%) translateY(0); }
      50% { transform: translateX(-50%) translateY(10px); }
    }

    @keyframes blink {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.5; }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.9);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    /* Hero Section */
    .hero {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 2rem;
      position: relative;
    }

    .hero-bg-1 {
      position: absolute;
      top: 20%;
      left: 10%;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(255,107,107,0.15) 0%, transparent 70%);
      border-radius: 50%;
      filter: blur(40px);
      animation: pulse 4s ease-in-out infinite;
    }

    .hero-bg-2 {
      position: absolute;
      bottom: 20%;
      right: 10%;
      width: 250px;
      height: 250px;
      background: radial-gradient(circle, rgba(78,205,196,0.15) 0%, transparent 70%);
      border-radius: 50%;
      filter: blur(40px);
      animation: pulse 4s ease-in-out infinite 2s;
    }

    .badge-urgent {
      animation: fadeInUp 0.6s ease-out;
      background: linear-gradient(90deg, #ff6b6b, #ff8e53);
      padding: 0.5rem 1.5rem;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      box-shadow: 0 4px 20px rgba(255,107,107,0.4);
    }

    .badge-urgent .icon {
      animation: blink 1s infinite;
    }

    .hero-title {
      animation: fadeInUp 0.8s ease-out 0.2s both;
      font-size: clamp(2rem, 8vw, 4.5rem);
      font-weight: 900;
      text-align: center;
      line-height: 1.2;
      margin-bottom: 1rem;
      background: linear-gradient(180deg, #fff 0%, #a0a0a0 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-title .highlight {
      background: linear-gradient(90deg, #4ecdc4, #44a08d);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-subtitle {
      animation: fadeInUp 0.8s ease-out 0.4s both;
      font-size: clamp(1rem, 2.5vw, 1.3rem);
      color: #888;
      text-align: center;
      margin-bottom: 2rem;
      max-width: 500px;
    }

    .hero-subtitle strong {
      color: #4ecdc4;
    }

    .price-compare {
      animation: fadeInScale 0.8s ease-out 0.6s both;
      display: flex;
      align-items: flex-end;
      gap: 2rem;
      margin-bottom: 3rem;
      padding: 2.5rem;
      background: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%);
      border-radius: 24px;
      border: 2px solid rgba(255,255,255,0.1);
      box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    }

    .price-bar {
      text-align: center;
    }

    .price-bar-market {
      width: 100px;
      height: 220px;
      background: linear-gradient(180deg, #888 0%, #555 50%, #333 100%);
      border-radius: 12px 12px 0 0;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding-top: 1rem;
      box-shadow: 0 4px 16px rgba(0,0,0,0.4);
      position: relative;
      overflow: hidden;
    }

    .price-bar-market::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 40%;
      background: linear-gradient(180deg, rgba(255,255,255,0.1) 0%, transparent 100%);
    }

    .price-bar-market span {
      font-size: 1rem;
      color: #ddd;
      font-weight: bold;
      position: relative;
      z-index: 1;
    }

    .price-bar-ours {
      width: 100px;
      height: 44px;
      background: linear-gradient(180deg, #4ecdc4 0%, #44a08d 100%);
      border-radius: 12px 12px 0 0;
      box-shadow: 0 0 30px rgba(78,205,196,0.6), 0 4px 16px rgba(0,0,0,0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .price-bar-ours::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 50%;
      background: linear-gradient(180deg, rgba(255,255,255,0.3) 0%, transparent 100%);
    }

    .price-bar-ours span {
      font-size: 0.9rem;
      font-weight: bold;
      position: relative;
      z-index: 1;
    }

    .price-bar p {
      font-size: 1.1rem;
      margin-top: 0.75rem;
      color: #888;
      font-weight: 600;
    }

    .price-bar p.highlight {
      color: #4ecdc4;
      font-weight: bold;
      font-size: 1.2rem;
      text-shadow: 0 0 10px rgba(78,205,196,0.5);
    }

    .cta-button {
      animation: fadeInUp 0.8s ease-out 0.8s both;
      background: linear-gradient(90deg, #4ecdc4, #44a08d);
      color: #000;
      padding: 1rem 3rem;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: bold;
      box-shadow: 0 4px 30px rgba(78,205,196,0.4);
      display: inline-block;
    }

    .scroll-indicator {
      position: absolute;
      bottom: 2rem;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
      color: #444;
      font-size: 1.5rem;
    }

    /* Section Common */
    .section {
      padding: 4rem 2rem;
      max-width: 900px;
      margin: 0 auto;
    }

    .section-title {
      font-size: clamp(1.5rem, 4vw, 2rem);
      text-align: center;
      margin-bottom: 1rem;
      font-weight: 700;
    }

    .section-title .highlight {
      color: #4ecdc4;
    }

    .section-title .highlight-red {
      color: #ff6b6b;
    }

    .section-subtitle {
      text-align: center;
      color: #888;
      margin-bottom: 3rem;
    }

    /* Features Section */
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
    }

    .feature-card {
      border-radius: 16px;
      padding: 2rem;
    }

    .feature-card.can-do {
      background: rgba(78,205,196,0.05);
      border: 1px solid rgba(78,205,196,0.2);
    }

    .feature-card.cannot-do {
      background: rgba(255,107,107,0.05);
      border: 1px solid rgba(255,107,107,0.2);
    }

    .feature-card h3 {
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
    }

    .feature-card h3.green {
      color: #4ecdc4;
    }

    .feature-card h3.red {
      color: #ff6b6b;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .feature-item .icon {
      font-size: 1.2rem;
    }

    .feature-item .text p:first-child {
      font-weight: bold;
      margin-bottom: 0.2rem;
    }

    .feature-item .text p:last-child {
      font-size: 0.85rem;
      color: #888;
    }

    .feature-note {
      margin-top: 1rem;
      padding: 0.75rem;
      background: rgba(255,255,255,0.03);
      border-radius: 8px;
      font-size: 0.85rem;
      color: #aaa;
    }

    /* Pricing Section */
    .pricing-section {
      max-width: 1000px;
    }

    .pricing-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5rem;
    }

    .pricing-card {
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 20px;
      padding: 2rem;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .pricing-card:hover {
      transform: scale(1.02);
    }

    .pricing-card.popular {
      background: linear-gradient(135deg, rgba(78,205,196,0.1) 0%, rgba(68,160,141,0.05) 100%);
      border: 2px solid rgba(78,205,196,0.5);
    }

    .pricing-ribbon {
      position: absolute;
      top: 12px;
      right: -30px;
      background: linear-gradient(90deg, #4ecdc4, #44a08d);
      color: #000;
      padding: 0.3rem 2.5rem;
      font-size: 0.7rem;
      font-weight: bold;
      transform: rotate(45deg);
    }

    .pricing-badge {
      display: inline-block;
      padding: 0.3rem 0.8rem;
      background: rgba(255,255,255,0.1);
      border-radius: 20px;
      font-size: 0.75rem;
      margin-bottom: 1rem;
    }

    .pricing-badge-spacer {
      height: 1.8rem;
    }

    .pricing-articles {
      font-size: 3rem;
      font-weight: 900;
      margin-bottom: 0.5rem;
      background: linear-gradient(90deg, #fff, #888);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .pricing-card.popular .pricing-articles {
      background: linear-gradient(90deg, #4ecdc4, #fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .pricing-articles span {
      font-size: 1rem;
    }

    .pricing-note {
      font-size: 0.75rem;
      color: #4ecdc4;
      margin-bottom: 0.5rem;
    }

    .pricing-price {
      margin-bottom: 1.5rem;
    }

    .pricing-price .amount {
      font-size: 2.5rem;
      font-weight: bold;
      color: #fff;
    }

    .pricing-card.popular .pricing-price .amount {
      color: #4ecdc4;
    }

    .pricing-price .unit {
      color: #888;
      font-size: 0.9rem;
    }

    .pricing-total {
      padding: 1rem;
      background: rgba(0,0,0,0.2);
      border-radius: 10px;
      margin-bottom: 1.5rem;
    }

    .pricing-total p:first-child {
      font-size: 0.85rem;
      color: #888;
      margin-bottom: 0.3rem;
    }

    .pricing-total p:last-child {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .pricing-total .tax {
      font-size: 0.8rem;
      color: #888;
    }

    .pricing-features {
      list-style: none;
      color: #aaa;
      font-size: 0.85rem;
    }

    .pricing-features li {
      margin-bottom: 0.5rem;
    }

    .pricing-features li.highlight {
      color: #4ecdc4;
    }

    /* Guarantee Section */
    .guarantee {
      margin-top: 3rem;
      padding: 2rem;
      background: linear-gradient(135deg, rgba(78,205,196,0.1) 0%, rgba(68,160,141,0.05) 100%);
      border: 2px solid rgba(78,205,196,0.3);
      border-radius: 16px;
      text-align: center;
    }

    .guarantee-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: linear-gradient(90deg, #4ecdc4, #44a08d);
      color: #000;
      padding: 0.4rem 1rem;
      border-radius: 50px;
      font-size: 0.8rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .guarantee h3 {
      font-size: 1.5rem;
      font-weight: 900;
      margin-bottom: 0.75rem;
    }

    .guarantee h3 .highlight {
      color: #4ecdc4;
    }

    .guarantee p {
      font-size: 0.9rem;
      color: #aaa;
      max-width: 500px;
      margin: 0 auto;
    }

    /* Why Low Price Section */
    .why-low-price-list {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .why-item {
      display: flex;
      gap: 1.5rem;
      padding: 1.5rem;
      background: linear-gradient(135deg, rgba(78,205,196,0.03) 0%, rgba(255,255,255,0.02) 100%);
      border: 1px solid rgba(78,205,196,0.1);
      border-radius: 16px;
      position: relative;
      overflow: hidden;
    }

    .why-item-number {
      position: absolute;
      top: -20px;
      right: -10px;
      font-size: 5rem;
      font-weight: 900;
      color: rgba(78,205,196,0.05);
      line-height: 1;
    }

    .why-item-icon {
      font-size: 2.5rem;
      flex-shrink: 0;
    }

    .why-item-content {
      position: relative;
      z-index: 1;
    }

    .why-item-content h3 {
      font-weight: bold;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
    }

    .why-item-content p {
      font-size: 0.9rem;
      color: #aaa;
      line-height: 1.7;
    }

    /* Schedule Section */
    .schedule-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
    }

    .schedule-card {
      padding: 1.5rem;
      background: rgba(78,205,196,0.05);
      border: 1px solid rgba(78,205,196,0.15);
      border-radius: 12px;
      text-align: center;
    }

    .schedule-card .icon {
      font-size: 2rem;
      display: block;
      margin-bottom: 0.75rem;
    }

    .schedule-card .title {
      font-weight: bold;
      font-size: 1.1rem;
      margin-bottom: 0.3rem;
    }

    .schedule-card .desc {
      font-size: 0.8rem;
      color: #888;
    }

    .schedule-note {
      margin-top: 1.5rem;
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
    }

    /* Use Cases Section */
    .usecases-list {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .usecase-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 1.5rem;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.05);
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .usecase-item .icon {
      font-size: 2rem;
    }

    .usecase-item .text p:first-child {
      font-weight: bold;
      margin-bottom: 0.3rem;
    }

    .usecase-item .text p:last-child {
      font-size: 0.9rem;
      color: #888;
    }

    /* Final CTA Section */
    .final-cta {
      padding: 6rem 2rem;
      text-align: center;
      background: linear-gradient(180deg, transparent 0%, rgba(78,205,196,0.05) 100%);
    }

    .final-cta .badge {
      display: inline-block;
      background: linear-gradient(90deg, #ff6b6b, #ff8e53);
      padding: 0.4rem 1.2rem;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
    }

    .final-cta h2 {
      font-size: clamp(1.8rem, 5vw, 2.5rem);
      font-weight: 900;
      margin-bottom: 1rem;
    }

    .final-cta h2 .highlight {
      color: #4ecdc4;
    }

    .final-cta .desc {
      color: #888;
      margin-bottom: 2.5rem;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-buttons {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
      max-width: 400px;
      margin: 0 auto;
    }

    .cta-line {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      background: #06C755;
      color: #fff;
      padding: 1.2rem 3rem;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: bold;
      box-shadow: 0 4px 30px rgba(6,199,85,0.4);
      width: 100%;
      max-width: 320px;
    }

    .cta-or {
      color: #666;
      font-size: 0.85rem;
    }

    .cta-twitter {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      background: linear-gradient(90deg, #4ecdc4, #44a08d);
      color: #000;
      padding: 1.2rem 3rem;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: bold;
      box-shadow: 0 4px 30px rgba(78,205,196,0.4);
      width: 100%;
      max-width: 320px;
    }

    .final-cta .note {
      margin-top: 2rem;
      font-size: 0.85rem;
      color: #666;
    }

    /* Footer */
    footer {
      padding: 2rem;
      text-align: center;
      border-top: 1px solid rgba(255,255,255,0.05);
      color: #444;
      font-size: 0.85rem;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .price-compare {
        flex-direction: row;
        justify-content: center;
      }

      .features-grid {
        grid-template-columns: 1fr;
      }

      .pricing-grid {
        grid-template-columns: 1fr;
      }

      .schedule-grid {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-bg-1"></div>
    <div class="hero-bg-2"></div>

    <div class="badge-urgent">
      <span class="icon">🔥</span>
      毎月限定10社 ｜ 前回即完売→価格改定して再開
    </div>

    <h1 class="hero-title">
      AI記事、<br>
      <span class="highlight">1本1,000円</span>から。
    </h1>

    <p class="hero-subtitle">
      <span style="display: inline-block; background: linear-gradient(90deg, #ff6b6b, #ff8e53); color: #fff; padding: 0.8rem 2rem; border-radius: 30px; margin-bottom: 0.8rem; font-size: 1.1rem; font-weight: bold; box-shadow: 0 4px 20px rgba(255,107,107,0.5);">🎉 <?php echo date('n'); ?>月限定モニター価格で50%OFF</span><br>
      相場5,000円〜15,000円のAI記事制作を<br>
      <strong>最大1/10以下の価格</strong>で。
    </p>

    <div class="price-compare">
      <div class="price-bar">
        <div class="price-bar-market"><span>相場</span></div>
        <p>¥5,000〜</p>
      </div>
      <div class="price-bar">
        <div class="price-bar-ours"><span>当社</span></div>
        <p class="highlight">¥1,000〜</p>
      </div>
    </div>

    <a href="#pricing" class="cta-button">料金プランを見る ↓</a>

    <div class="scroll-indicator">↓</div>
  </section>

  <!-- Features Section -->
  <section class="section">
    <h2 class="section-title">できること・<span class="highlight-red">できないこと</span></h2>

    <div class="features-grid">
      <div class="feature-card can-do">
        <h3 class="green">✅ できること</h3>
        <div class="feature-item">
          <span class="icon">⚡</span>
          <div class="text">
            <p>WordPress自動入稿</p>
            <p>管理画面で確認するだけ</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">🚀</span>
          <div class="text">
            <p>最短3日納品</p>
            <p>急ぎの案件もOK</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">📅</span>
          <div class="text">
            <p>投稿スケジュール指定</p>
            <p>毎日1記事、3日に1記事など自由</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">📂</span>
          <div class="text">
            <p>カテゴリー自動付与</p>
            <p>手間いらず</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">📊</span>
          <div class="text">
            <p>大量記事に対応</p>
            <p>100〜500記事以上まで</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">🎯</span>
          <div class="text">
            <p>キーワード設計</p>
            <p>狙うKWの選定もお任せ</p>
          </div>
        </div>
      </div>

      <div class="feature-card cannot-do">
        <h3 class="red">❌ できないこと</h3>
        <div class="feature-item">
          <span class="icon">🖼️</span>
          <div class="text">
            <p>サムネイル作成</p>
            <p>つきません</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">✨</span>
          <div class="text">
            <p>高品質な文章</p>
            <p>クオリティは「そこそこ」です</p>
          </div>
        </div>
        <div class="feature-item">
          <span class="icon">🔧</span>
          <div class="text">
            <p>個別カスタマイズ</p>
            <p>大量生産のため難しいです</p>
          </div>
        </div>
        <p class="feature-note">
          正直に言います。<br>でもこの価格は他にないはず。
        </p>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
  <section id="pricing" class="section pricing-section">
    <h2 class="section-title">料金プラン</h2>
    <p class="section-subtitle" style="display: inline-block; background: linear-gradient(90deg, #ff6b6b, #ff8e53); color: #fff; font-weight: bold; font-size: 1.3rem; padding: 1rem 2.5rem; border-radius: 30px; box-shadow: 0 4px 20px rgba(255,107,107,0.5); margin-bottom: 2rem;">🎉 <?php echo date('n'); ?>月限定モニター価格で50%OFF！</p>

    <div class="pricing-grid">
      <!-- 500+ Plan -->
      <div class="pricing-card popular">
        <div class="pricing-ribbon">人気</div>
        <div class="pricing-badge">人気</div>
        <div class="pricing-articles">500+<span>記事</span></div>
        <p class="pricing-note">500記事以上も対応可</p>
        <div class="pricing-price">
          <div style="text-decoration: line-through; color: #666; font-size: 1.2rem; margin-bottom: 0.3rem;">¥1,000/記事</div>
          <div style="color: #ff6b6b; font-size: 0.85rem; font-weight: bold; margin-bottom: 0.5rem;">↓ <?php echo date('n'); ?>月限定50%OFF</div>
          <span class="amount">¥500</span>
          <span class="unit">/記事</span>
        </div>
        <div class="pricing-total">
          <p>お支払い総額</p>
          <p><span style="text-decoration: line-through; color: #666; font-size: 1rem; margin-right: 0.5rem;">¥500,000〜</span></p>
          <p>¥250,000〜<span class="tax">（税別）</span></p>
        </div>
        <ul class="pricing-features">
          <li>✓ WordPress自動入稿</li>
          <li>✓ 投稿スケジュール指定OK</li>
          <li>✓ カテゴリー自動付与</li>
          <li>✓ キーワード設計サポート</li>
          <li>✓ 最短3日納品</li>
          <li class="highlight">✓ 全額返金保証</li>
        </ul>
      </div>

      <!-- 300 Plan -->
      <div class="pricing-card">
        <div class="pricing-badge-spacer"></div>
        <div class="pricing-articles">300<span>記事</span></div>
        <div class="pricing-price">
          <div style="text-decoration: line-through; color: #666; font-size: 1.2rem; margin-bottom: 0.3rem;">¥1,400/記事</div>
          <div style="color: #ff6b6b; font-size: 0.85rem; font-weight: bold; margin-bottom: 0.5rem;">↓ <?php echo date('n'); ?>月限定50%OFF</div>
          <span class="amount">¥700</span>
          <span class="unit">/記事</span>
        </div>
        <div class="pricing-total">
          <p>お支払い総額</p>
          <p><span style="text-decoration: line-through; color: #666; font-size: 1rem; margin-right: 0.5rem;">¥420,000</span></p>
          <p>¥210,000<span class="tax">（税別）</span></p>
        </div>
        <ul class="pricing-features">
          <li>✓ WordPress自動入稿</li>
          <li>✓ 投稿スケジュール指定OK</li>
          <li>✓ カテゴリー自動付与</li>
          <li>✓ キーワード設計サポート</li>
          <li>✓ 最短3日納品</li>
          <li class="highlight">✓ 全額返金保証</li>
        </ul>
      </div>

      <!-- 100 Plan -->
      <div class="pricing-card">
        <div class="pricing-badge">お試し</div>
        <div class="pricing-articles">100<span>記事</span></div>
        <div class="pricing-price">
          <div style="text-decoration: line-through; color: #666; font-size: 1.2rem; margin-bottom: 0.3rem;">¥2,000/記事</div>
          <div style="color: #ff6b6b; font-size: 0.85rem; font-weight: bold; margin-bottom: 0.5rem;">↓ <?php echo date('n'); ?>月限定50%OFF</div>
          <span class="amount">¥1,000</span>
          <span class="unit">/記事</span>
        </div>
        <div class="pricing-total">
          <p>お支払い総額</p>
          <p><span style="text-decoration: line-through; color: #666; font-size: 1rem; margin-right: 0.5rem;">¥200,000</span></p>
          <p>¥100,000<span class="tax">（税別）</span></p>
        </div>
        <ul class="pricing-features">
          <li>✓ WordPress自動入稿</li>
          <li>✓ 投稿スケジュール指定OK</li>
          <li>✓ カテゴリー自動付与</li>
          <li>✓ キーワード設計サポート</li>
          <li>✓ 最短3日納品</li>
          <li class="highlight">✓ 全額返金保証</li>
        </ul>
      </div>
    </div>

    <!-- Guarantee -->
    <div class="guarantee">
      <div class="guarantee-badge">🛡️ 安心保証</div>
      <h3>満足いかなかった場合、<span class="highlight">全額返金</span>します</h3>
      <p>納品後、品質にご満足いただけなかった場合は全額返金いたします。<br>初めてのご利用でも安心してお試しください。</p>
    </div>
  </section>

  <!-- Why Low Price Section -->
  <section class="section">
    <h2 class="section-title">なぜこの<span class="highlight">低価格</span>が実現できるのか？</h2>
    <p class="section-subtitle">徹底した自動化と割り切りで、圧倒的コストダウン</p>

    <div class="why-low-price-list">
      <div class="why-item">
        <span class="why-item-number">01</span>
        <span class="why-item-icon">🤖</span>
        <div class="why-item-content">
          <h3>完全自動化システム</h3>
          <p>記事生成からWordPress入稿まで、独自開発の自動化システムで一括処理。人の手がほとんど入らないから、大幅なコストカットが可能に。</p>
        </div>
      </div>
      <div class="why-item">
        <span class="why-item-number">02</span>
        <span class="why-item-icon">📦</span>
        <div class="why-item-content">
          <h3>大量発注で単価を下げる</h3>
          <p>100記事以上のまとめ発注に限定することで、1記事あたりの処理コストを最小化。だから少量発注では実現できない価格を提供できます。</p>
        </div>
      </div>
      <div class="why-item">
        <span class="why-item-number">03</span>
        <span class="why-item-icon">✂️</span>
        <div class="why-item-content">
          <h3>「やらないこと」を決めている</h3>
          <p>サムネイル作成なし、個別カスタマイズなし、クオリティは「そこそこ」。余計なサービスを削ぎ落とすことで、本当に必要な部分にコストを集中。</p>
        </div>
      </div>
      <div class="why-item">
        <span class="why-item-number">04</span>
        <span class="why-item-icon">🎯</span>
        <div class="why-item-content">
          <h3>キーワード設計もお任せ</h3>
          <p>「どんな記事を書けばいいかわからない」という方もご安心を。ご希望があれば、狙うべきキーワードの選定・設計からサポート。検索ボリュームや競合状況を踏まえた戦略的なキーワードリストをご提案します。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Schedule Section -->
  <section class="section">
    <h2 class="section-title"><span class="highlight">投稿スケジュール</span>も自由自在</h2>
    <p class="section-subtitle">ご希望の投稿ペースに合わせて、予約投稿を設定します</p>

    <div class="schedule-grid">
      <div class="schedule-card">
        <span class="icon">📆</span>
        <p class="title">毎日1記事</p>
        <p class="desc">100記事 → 約3ヶ月</p>
      </div>
      <div class="schedule-card">
        <span class="icon">🔥</span>
        <p class="title">毎日3記事</p>
        <p class="desc">300記事 → 約3ヶ月</p>
      </div>
      <div class="schedule-card">
        <span class="icon">🐢</span>
        <p class="title">3日に1記事</p>
        <p class="desc">じっくり更新派に</p>
      </div>
      <div class="schedule-card">
        <span class="icon">⚡</span>
        <p class="title">一括投稿</p>
        <p class="desc">即座に全記事公開</p>
      </div>
    </div>

    <p class="schedule-note">※ 上記以外のスケジュールもご相談ください</p>
  </section>

  <!-- Use Cases Section -->
  <section class="section">
    <h2 class="section-title">こんな方におすすめ</h2>

    <div class="usecases-list">
      <div class="usecase-item">
        <span class="icon">🚀</span>
        <div class="text">
          <p>新規サイトの立ち上げ</p>
          <p>まずは記事数を確保してドメインパワーを上げたい</p>
        </div>
      </div>
      <div class="usecase-item">
        <span class="icon">🛰️</span>
        <div class="text">
          <p>サテライトサイト構築</p>
          <p>被リンク用のサイトを効率よく作りたい</p>
        </div>
      </div>
      <div class="usecase-item">
        <span class="icon">🎯</span>
        <div class="text">
          <p>ロングテール攻略</p>
          <p>ニッチなキーワードを大量に狙いたい</p>
        </div>
      </div>
      <div class="usecase-item">
        <span class="icon">💪</span>
        <div class="text">
          <p>記事数で殴りたい人</p>
          <p>とにかくボリュームで勝負したい</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Final CTA Section -->
  <section class="final-cta">
    <div class="badge">毎月限定10社</div>

    <h2>記事数で殴りたい人、<br><span class="highlight">ご連絡ください。</span></h2>

    <p class="desc">お問い合わせ殺到時は早期締切の可能性あり。<br>お早めにご連絡ください。</p>

    <div class="cta-buttons">
      <a href="https://line.me/ti/p/ZsFAEvKq6j" target="_blank" rel="noopener noreferrer" class="cta-line">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.105.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.349 0 .631.285.631.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.349 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.281.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
        </svg>
        LINEで相談する
      </a>

      <p class="cta-or">または</p>

      <a href="https://x.com/ss_yamamoto1994" target="_blank" rel="noopener noreferrer" class="cta-twitter">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
        </svg>
        X（Twitter）でDMする
      </a>
    </div>

    <p class="note">※ 法人・個人どちらも対応可能です</p>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 AI記事制作サービス</p>
  </footer>

</body>
</html>