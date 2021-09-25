@extends('layouts/starter_account')
@section('header_styles')
@stop
  <style>
  .btn-wrapper span{
    font-size: 14px;
    font-weight: 700;
  }
  .ti-heart, .ti-pencil-alt, .ti-files, .ti-bookmark-alt, .ti-comment-alt{
    font-weight: 700;
  }
  .btn-wrapper:hover{
    color: var(--danger);
    cursor: pointer;
  }
  .fw-500{
    font-weight: 500;
  }
  .animated-bg{
    background-image:linear-gradient(to right, #f6f7f8 0%, #edeef1 10%, #f6f7f8 20%, #f6f7f8 100%);
    background-size: 200% 100%;
    animation: bgPos 2s linear infinite;
    border-radius: 3px;
    padding-left: 5px;
    padding-right: 5px;
  }
  .animated-bg-text{
    border-radius: 10px;
    width: 100px;
    height: 10px;
  }
  .animated-bg-img{
    border-radius: 10px;
    height: 35px;
    width: 35px;
  }
  @keyframes bgPos{
    0%{
      background-position: 50% 0;
    } 
    100%{
      background-position: -150% 0;
    }
  }
  </style>
{{-- Page content --}}
@section('content')
  <div class="content-wrapper">
    <!-- Quick Action Toolbar Starts-->
    <div class="row quick-action-toolbar">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
              <span class="animated-bg animated-bg-text" id="answer"></span>
            </div>
            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
              <span class="animated-bg animated-bg-text" id="trendingQuestions"></span>
            </div>
            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
              <span class="animated-bg animated-bg-text" id="bookmarkedResources"></span>
            </div>
            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
              <span class="animated-bg animated-bg-text" id="likedQuestions"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex align-items-baseline report-summary-header">
                  <h5 class="font-weight-semibold animated-bg animated-bg-text" id="activities">&nbsp;</h5> <span class="ml-auto animated-bg-text"></span> <button class="btn btn-icons border-0 p-2 mr-10"><i class="icon-refresh"></i></button>
                </div>
              </div>
            </div>
            <div class="row report-inner-cards-wrapper">
              <div class=" col-md -6 col-xl report-inner-card">
                <div class="inner-card-text">
                  <span class="report-title animated-bg animated-bg-text" id="questions">&nbsp;</span><br />
                  <h4 class="animated-bg animated-bg-text" id="numberOfQuestions"></h4>
                  <span class="report-count animated-bg animated-bg-text"><a href="#" id="detailsQuestions"></a></span>
                </div>
                <div class="inner-card-icon bg-success animated-bg animated-bg-img">
                  <i id="iconQuestions"></i>
                </div>
              </div>
              <div class="col-md-6 col-xl report-inner-card">
                <div class="inner-card-text">
                  <span class="report-title animated-bg animated-bg-text" id="downloads">&nbsp;</span><br />
                  <h4 class="animated-bg animated-bg-text" id="numberOfDownloads"></h4>
                  <span class="report-count animated-bg animated-bg-text"><a href="#" id="detailsDownloads"></a></span>
                </div>
                <div class="inner-card-icon bg-danger animated-bg animated-bg-img">
                  <i id="iconDownloads"></i>
                </div>
              </div>
              <div class="col-md-6 col-xl report-inner-card">
                <div class="inner-card-text">
                  <span class="report-title animated-bg animated-bg-text" id="answers">&nbsp;</span><br />
                  <h4 class="animated-bg animated-bg-text" id="numberOfAnswers"></h4>
                  <span class="report-count animated-bg animated-bg-text"><a href="#" id="detailsAnswers"></a></span>
                </div>
                <div class="inner-card-icon bg-warning animated-bg animated-bg-img">
                  <i id="iconAnswers"></i>
                </div>
              </div>
              <div class="col-md-6 col-xl report-inner-card">
                <div class="inner-card-text">
                  <span class="report-title animated-bg animated-bg-text" id="wallet"></span><br />
                  <h4 class="animated-bg animated-bg-text" id="walletAmount"></h4>
                  <span class="report-count animated-bg animated-bg-text"><a href="#" id="detailsWallet"></a></span>
                </div>
                <div class="inner-card-icon bg-primary animated-bg animated-bg-img">
                  <i id="iconWallet"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Quick Action Toolbar Ends-->
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row income-expense-summary-chart-text">
              <div class="col-xl-4">
                <h5>Participation Analytics</h5>
                <p class="small text-muted">Answer questions and earn points which is convertible to local currency</p>
              </div>
              <div class=" col-md-3 col-xl-2">
                <p class="income-expense-summary-chart-legend"> <span style="border-color: var(--success);"></span> Points Earned</p>
                <h3>0</h3>
              </div>
              <div class="col-md-3 col-xl-2">
                <p class="income-expense-summary-chart-legend"> <span style="border-color: var(--warning);"></span>Points Spent </p>
                <h3>0</h3>
              </div>
              <div class="col-md-6 col-xl-4 d-flex align-items-center">
                <div class="input-group" id="income-expense-summary-chart-daterange">
                  <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                  <input type="text" class="form-control">
                  <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                </div>
              </div>
              <div class="table-responsive border rounded p-1">
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th class="font-weight-bold">Question ID</th>
                    <th class="font-weight-bold">User</th>
                    <th class="font-weight-bold">Institution</th>
                    <th class="font-weight-bold">Amount</th>
                    <th class="font-weight-bold">Payment satus</th>
                  </tr>
                </thead>
                <tbody>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
@stop
{{-- page level scripts --}}
@section('footer_scripts')
<script>
  //Dashoard section
  const activities = document.getElementById('activities')
  const downloads = document.getElementById('downloads')
  const questions = document.getElementById('questions')
  const numberOfQuestions = document.getElementById('numberOfQuestions')
  const answers = document.getElementById('answers')
  const numberOfAnswers = document.getElementById('numberOfAnswers')
  const numberOfDownloads = document.getElementById('numberOfDownloads')
  const wallet = document.getElementById('wallet')
  const walletAmount = document.getElementById('walletAmount')
  const detailsQuestions = document.getElementById('detailsQuestions')
  const detailsDownloads = document.getElementById('detailsDownloads')
  const detailsAnswers = document.getElementById('detailsAnswers')
  const detailsWallet = document.getElementById('detailsWallet')
  // Quick Links section
  const answer = document.getElementById('answer')  
  const trendingQuestions = document.getElementById('trendingQuestions')
  const bookmarkedResources = document.getElementById('bookmarkedResources')
  const likedQuestions = document.getElementById('likedQuestions')

  const animatedBackground = document.querySelectorAll('.animated-bg')
  const animatedBackgroundTexts = document.querySelectorAll('.animated-bg-text')
  const iconQuestions = document.getElementById('iconQuestions')
  const iconDownloads = document.getElementById('iconDownloads')
  const iconAnswers = document.getElementById('iconAnswers')
  const iconWallet = document.getElementById('iconWallet')

  setTimeout(getData, 1000)

  function getData() {
      detailsQuestions.innerHTML = 'view details'
      detailsAnswers.innerHTML = 'view details'
      detailsDownloads.innerHTML = 'view details'
      detailsWallet.innerHTML = 'fund my wallet'
      activities.innerHTML = 'Dashboard'
      downloads.innerHTML = 'Downloads'
      questions.innerHTML = 'Questions'
      numberOfQuestions.innerHTML = '0'
      answers.innerHTML = 'Answers'
      numberOfAnswers.innerHTML = '0'
      numberOfDownloads.innerHTML = '0'
      wallet.innerHTML = 'Wallet'
      walletAmount.innerHTML = '0'
      //Quick links section

      answer.innerHTML = '<i class="ti-pencil-alt mr-2 text-danger"></i>Answer' 
      trendingQuestions.innerHTML = '<i class="ti-files mr-2 text-danger"></i>Trending Questions'
      bookmarkedResources.innerHTML = '<i class="ti-bookmark-alt mr-2 text-danger"></i>Bookmarked Resources'
      likedQuestions.innerHTML = '<i class="ti-heart mr-2 text-danger"></i>Liked Questions'
      // Icons
      iconQuestions.innerHTML = '<i class="ti-help-alt"></i>'
      iconDownloads.innerHTML = '<i class="ti-download"></i>'
      iconAnswers.innerHTML = '<i class="ti-comment-alt"></i>'
      iconWallet.innerHTML = '<i class="ti-wallet"></i>'

      animatedBackground.forEach(bg => bg.classList.remove('animated-bg')) 
      animatedBackgroundTexts.forEach(bg => bg.classList.remove('animated-bg-text')) 
  }

</script>
@stop
