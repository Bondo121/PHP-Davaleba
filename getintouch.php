<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Message Submitted - Mico Hospital</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
</head>
<body class="sub_page">

  <div class="hero_area">
    <header class="header_section"><div class="container"></div></header>
  </div>

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <div class="detail-box">
            <div class="heading_container heading_center">
              <h2>
                Your message is <span>submitted.</span>
              </h2>
            </div>
            
            <?php if(isset($_POST['full_name'])): ?>
                <p class="mt-4">
                  Thank you, <strong><?= htmlspecialchars($_POST['full_name']) ?></strong>! We have received your message and will get back to you at <strong><?= htmlspecialchars($_POST['email']) ?></strong> soon.
                </p>
            <?php else: ?>
                <p class="mt-4">Thank you for getting in touch with us.</p>
            <?php endif; ?>

            <a href="index.php" class="btn btn-primary mt-4" style="background-color: #00c6a9; border: none; padding: 10px 30px;">
              Back to Home
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>