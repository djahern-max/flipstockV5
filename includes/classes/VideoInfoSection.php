<?php
require_once("includes/classes/VideoInfoControls.php"); 
class VideoInfoSection {

    private $con, $video, $userLoggedInObj;

    public function __construct($con, $video, $userLoggedInObj) {
        $this->con = $con;
        $this->video = $video;
        $this->userLoggedInObj = $userLoggedInObj;
    }

    public function create() {
        return $this->createPrimaryInfo() . $this->createSecondaryInfo();
    }

    private function createPrimaryInfo() {
        $title = $this->video->getTitle();
        $views = $this->video->getViews();

        $videoInfoControls = new VideoInfoControls($this->video, $this->userLoggedInObj);
        $controls = $videoInfoControls->create();

        return "<div class='videoInfo'>
                    <h1>$title</h1>

                    <div class='bottomSection'>
                        <span class='viewCount'>$views views</span>
                        $controls
                    </div>
                </div>";
    }

    private function createSecondaryInfo() {

        $description = $this->video->getDescription();
        $uploadDate = $this->video->getUploadDate();
        $uploadedBy = $this->video->getUploadedBy();
        $profileButton = ButtonProvider::createUserProfileButton($this->con, $uploadedBy);

        if($uploadedBy == $this->userLoggedInObj->getUsername()) {
            $actionButton = ButtonProvider::createEditVideoButton($this->video->getId());
        }
        else {
            $userToObject = new User($this->con, $uploadedBy);
            $actionButton = ButtonProvider::createSubscriberButton($this->con, $userToObject, $this->userLoggedInObj);
        }
        
        return "<div class='secondaryInfo'>
                    <div class='topRow'>
                        $profileButton

                        <div class='uploadInfo'>
                            <span class='owner'>
                                <a href='profile.php?username=$uploadedBy'>
                                    $uploadedBy
                                </a>
                            </span>
                            <span class='date'>Published on $uploadDate</span>
         
Why were investors so skittish this week?  Was it inflation, or was it the new COVID variant “Omicron?”  I don’t think so.  Plain and simple, I believe the markets are volatile because of Jerome Powell’s flip-flopping related to his stance on inflation.  For months, he has been communicating to the world that inflation is “transitory.”  Suddenly, he has stated that that word should be…. retired.  Seriously?!?!
In my mind, his thought process is very transparent.  He has been re-confirmed.  Now he is free to act responsibly (for a change) and take actions to deflate the ridiculous bubble that has become the US Stock Market.  
I honestly believe that Joe Biden is a lot smarter and more capable than people give him credit for.  This is just speculation, but I wouldn’t be surprised if he pulled Powell aside and said, “look, I will re-nominate you as Fed Chair, but the party has to end.”  Jerome Powell’s change in messaging to the market is extremely abrupt and, quite frankly, wishy-washy.  What do you really believe Jerome??  As a non-economist, lawyer, I simply don’t trust the man and I don’t think he is the right person to run the Federal Reserve.  It is not a popularity contest.  It is the most important job in the world in my opinion.  Young inexperienced investors have been drawn into the markets thinking that prices simply go up.  They will be taught a hard lesson.  I was one of them once.  I suppose we need those lessons, but I feel for those that will lose hard earned money.

HOW SHOUD YOU POSITION:
It is very rare to hear a money manager recommend holding cash.  Ray Dalio, who started the worlds largest hedge fund Bridgewater Associates, often preaches the dangers of holding cash.  However, this week it was refreshing to hear Dan Niles, the founder of the Santori Fund, state on CNBC that he believes it is important to hold cash right now.  That is a rare statement coming from a fund manager.  I believe that we are at a point in the cycle that “Cash is King” again.  Sure, inflation might be running at ~6% annually right now, which is not good.  But, if you were invested in the NASDAQ on Friday, you lost around 2% of your money….   in ONE DAY!   Many of us have experienced some great gains in 2021 with the DJIA up 12.98%, the NASDAQ up 17.05% and the S&P up 20.83%, so what is the danger of taking money off the table while waiting for better opportunities.  For this reason, I am currently 100% in cash. 

WHERE ARE THE OPPORTUNITIES:  
If you consider yourself a trader, then there are some great opportunities right now.  I look for quality companies with very strong earnings and balance sheets.  I find many of these opportunities in the financial sector.  Specifically in the large money center banks and insurance companies.  When the market drags these stocks down 3-4% I step in and buy a basket.  When they recover a bit, I sell.  Even if it is for a 1-2% gain.  This strategy worked great for me this week and I was able to sides-step the volatility and make money in a down market.

I also believe that there are solid long-term opportunities right now with utilities like American Electric Power (AEP), inflation hedges such as Dollar General (DG) and Dollar Tree (DLTR), and insurer Unum (UNM).  If you are less inclined to day-trade then I think these stocks provide a good place to ride out the volatility.  For example, Unum has a PE of ~6%, yields 5.21% and they recently approved a $250m share repurchase program.  They have had some significant exposure related to the pandemic with their casualty/life business, which has weighed on the stock price.  But this is a strong company that will be around for a long time.  Goldman Sachs recently initiated coverage on Unum with a Buy rating and a price target of $32.  I believe this is the confirmation we need to light a fire under this stock.  The rate on the US 10-YR at 1.356% is not helping Unum’s investment returns however often the market will often overlook these short-term price dislocations and rate stocks based on what the environment might look like 6-12 months out.  Interest rates will most likely be much higher in the future, which will help insurance companies like Unum.

The video above is simply a took I use to review watchlists I have on my phone.  It is helpful for me to review trends over time.  With this strategy, I have been able to earn great investment returns and consistently pick winners.  I hope you find it useful (and not too boring ; ).

(The app I use is called “StocksTracker.”  It is a free app that can be downloaded from the app store.  It is priceless to me.  No pricey Boomberg Terminals here!  With this app, and lots of research, I have been able to achieve a 1,571% return over the past three years).
Good luck!!

                        </div>
                        $actionButton
                    </div>

                    <div class='descriptionContainer'>
                        $description
                  
        
                    <div>
                    Why were investors so skittish this week?  Was it inflation, or was it the new COVID variant “Omicron?”  I don’t think so.  Plain and simple, I believe the markets are volatile because of Jerome Powell’s flip-flopping related to his stance on inflation.  For months, he has been communicating to the world that inflation is “transitory.”  Suddenly, he has stated that that word should be…. retired.  Seriously?!?!
                    In my mind, his thought process is very transparent.  He has been re-confirmed.  Now he is free to act responsibly (for a change) and take actions to deflate the ridiculous bubble that has become the US Stock Market.  
                    I honestly believe that Joe Biden is a lot smarter and more capable than people give him credit for.  This is just speculation, but I wouldn’t be surprised if he pulled Powell aside and said, “look, I will re-nominate you as Fed Chair, but the party has to end.”  Jerome Powell’s change in messaging to the market is extremely abrupt and, quite frankly, wishy-washy.  What do you really believe Jerome??  As a non-economist, lawyer, I simply don’t trust the man and I don’t think he is the right person to run the Federal Reserve.  It is not a popularity contest.  It is the most important job in the world in my opinion.  Young inexperienced investors have been drawn into the markets thinking that prices simply go up.  They will be taught a hard lesson.  I was one of them once.  I suppose we need those lessons, but I feel for those that will lose hard earned money.
                    
                    HOW SHOUD YOU POSITION:
                    It is very rare to hear a money manager recommend holding cash.  Ray Dalio, who started the worlds largest hedge fund Bridgewater Associates, often preaches the dangers of holding cash.  However, this week it was refreshing to hear Dan Niles, the founder of the Santori Fund, state on CNBC that he believes it is important to hold cash right now.  That is a rare statement coming from a fund manager.  I believe that we are at a point in the cycle that “Cash is King” again.  Sure, inflation might be running at ~6% annually right now, which is not good.  But, if you were invested in the NASDAQ on Friday, you lost around 2% of your money….   in ONE DAY!   Many of us have experienced some great gains in 2021 with the DJIA up 12.98%, the NASDAQ up 17.05% and the S&P up 20.83%, so what is the danger of taking money off the table while waiting for better opportunities.  For this reason, I am currently 100% in cash. 
                    
                    WHERE ARE THE OPPORTUNITIES:  
                    If you consider yourself a trader, then there are some great opportunities right now.  I look for quality companies with very strong earnings and balance sheets.  I find many of these opportunities in the financial sector.  Specifically in the large money center banks and insurance companies.  When the market drags these stocks down 3-4% I step in and buy a basket.  When they recover a bit, I sell.  Even if it is for a 1-2% gain.  This strategy worked great for me this week and I was able to sides-step the volatility and make money in a down market.
                    
                    I also believe that there are solid long-term opportunities right now with utilities like American Electric Power (AEP), inflation hedges such as Dollar General (DG) and Dollar Tree (DLTR), and insurer Unum (UNM).  If you are less inclined to day-trade then I think these stocks provide a good place to ride out the volatility.  For example, Unum has a PE of ~6%, yields 5.21% and they recently approved a $250m share repurchase program.  They have had some significant exposure related to the pandemic with their casualty/life business, which has weighed on the stock price.  But this is a strong company that will be around for a long time.  Goldman Sachs recently initiated coverage on Unum with a Buy rating and a price target of $32.  I believe this is the confirmation we need to light a fire under this stock.  The rate on the US 10-YR at 1.356% is not helping Unum’s investment returns however often the market will often overlook these short-term price dislocations and rate stocks based on what the environment might look like 6-12 months out.  Interest rates will most likely be much higher in the future, which will help insurance companies like Unum.
                    
                    The video above is simply a took I use to review watchlists I have on my phone.  It is helpful for me to review trends over time.  With this strategy, I have been able to earn great investment returns and consistently pick winners.  I hope you find it useful (and not too boring ; ).
                    
                    (The app I use is called “StocksTracker.”  It is a free app that can be downloaded from the app store.  It is priceless to me.  No pricey Boomberg Terminals here!  With this app, and lots of research, I have been able to achieve a 1,571% return over the past three years).
                    Good luck!!

                    </div>
                </div>";

    }

}
?>