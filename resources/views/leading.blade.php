
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/pricing-plan.css">

  <style>
    body {
  font-family: 'Karla', sans-serif; }

.pricing-table-subtitle {
  margin-top: 68px;
  font-weight: normal; }

.pricing-table-title {
  font-weight: bold;
  margin-bottom: 68px; }

.pricing-card {
  border: none;
  border-radius: 10px;
  margin-bottom: 40px;
  text-align: center;
  -webkit-transition: all 0.6s;
  transition: all 0.6s; }
  .pricing-card:hover {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55); }
  .pricing-card.pricing-card-highlighted {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55); }
  .pricing-card:hover {
    box-shadow: 0 2px 40px 0 rgba(205, 205, 205, 0.55);
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px); }
  .pricing-card .card-body {
    padding-top: 55px;
    padding-bottom: 62px; }

.pricing-plan-title {
  font-size: 20px;
  color: #000;
  margin-bottom: 11px;
  font-weight: normal; }

.pricing-plan-cost {
  font-size: 50px;
  color: #000;
  font-weight: bold;
  margin-bottom: 29px; }

.pricing-plan-icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  font-size: 40px;
  line-height: 1;
  margin-bottom: 24px; }
  .pricing-plan-basic .pricing-plan-icon {
    color: #fe397a; }
  .pricing-plan-pro .pricing-plan-icon {
    color: #10bb87; }
  .pricing-plan-enterprise .pricing-plan-icon {
    color: #5d78ff; }

.pricing-plan-features {
  list-style: none;
  padding-left: 0;
  font-size: 14px;
  line-height: 2.14;
  margin-bottom: 35px;
  color: #303132; }

.pricing-plan-purchase-btn {
  color: #000;
  font-size: 16px;
  font-weight: bold;
  width: 145px;
  height: 45px;
  border-radius: 22.5px;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  margin-left: auto;
  margin-right: auto;
  -webkit-box-pack: center;
          justify-content: center; }
  .pricing-plan-basic .pricing-plan-purchase-btn {
    background-color: #fe397a;
    color: #fff; }
    .pricing-plan-basic .pricing-plan-purchase-btn:hover {
      box-shadow: 0 3px 0 0 #b7013d; }
    .pricing-plan-basic .pricing-plan-purchase-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
  .pricing-plan-pro .pricing-plan-purchase-btn {
    background-color: #10bb87;
    color: #fff; }
    .pricing-plan-pro .pricing-plan-purchase-btn:hover {
      box-shadow: 0 3px 0 0 #0a7554; }
    .pricing-plan-pro .pricing-plan-purchase-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }
  .pricing-plan-enterprise .pricing-plan-purchase-btn {
    background-color: #5d78ff;
    color: #fff; }
    .pricing-plan-enterprise .pricing-plan-purchase-btn:hover {
      box-shadow: 0 3px 0 0 #1138ff; }
    .pricing-plan-enterprise .pricing-plan-purchase-btn:active {
      -webkit-transform: translateY(3px);
              transform: translateY(3px);
      box-shadow: none; }

/*# sourceMappingURL=pricing-plan.css.map */
  </style>
</head>
<body>
  <main>
    <div class="container">
      <h5 class="text-center pricing-table-subtitle">STOK</h5>
      <h1 class="text-center pricing-table-title">Tabela de Preços</h1>
      <h5 class="text-center pricing-table-title">Escolha sua assinatura</h5>
      <div class="row">
        {{-- <div class="col-md-4">
          <div class="card pricing-card pricing-plan-basic">
            <div class="card-body">
              <i class="mdi mdi-cube-outline pricing-plan-icon"></i>
              <p class="pricing-plan-title">Basic</p>
              <h3 class="pricing-plan-cost ml-auto">FREE</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Free</a>
            </div>
          </div>
        </div> --}}
        <div class="col-md-4">
          <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
            <div class="card-body">
                <i class="mdi mdi-trophy pricing-plan-icon"></i>
              <p class="pricing-plan-title">Básico</p>
              <h3 class="pricing-plan-cost ml-auto">R$ 70,00</h3>
              <ul class="pricing-plan-features">
                <li>Controle de receita</li>
                <li>Gerenciamento de pagamentos</li>
                <li>Controle de carteira de clientes</li>
                <li>Personalize seus produtos</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Assinar</a>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-4">
          <div class="card pricing-card pricing-plan-enterprise">
            <div class="card-body">
              <i class="mdi mdi-wallet-giftcard pricing-plan-icon"></i>
              <p class="pricing-plan-title">Enterprise</p>
              <h3 class="pricing-plan-cost ml-auto">$69</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
