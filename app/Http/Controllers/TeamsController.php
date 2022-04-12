<?php

namespace App\Http\Controllers;

class TeamsController extends Controller
{
    public function ferrari()
    {
        $viewData = [];
        $viewData["title"] = "Ferrari - Online Store";
        $viewData["subtitle"] = "Scuderia Ferrari";
        $viewData["color"] = "#ff2800";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/ferrari.png.transform/6col/image.png";
        $viewData["teamdesc"] = "For many, Ferrari and Formula 1 racing have become inseparable. The only team to have competed
        in every season since the world championship began, the Prancing Horse has grown from the humble
        dream of founder Enzo Ferrari to become one of the most iconic and recognised brands in the
        world. Success came quickly through the likes of Alberto Ascari and John Surtees, and continued
        – in amongst leaner times – with Niki Lauda in the 1970s and then Michael Schumacher in the
        2000s, when Ferrari claimed a then unprecedented five consecutive title doubles, securing their
        status as the most successful and decorated team in F1 history...";
        $viewData["driver1name"] = "Charles Leclerc";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/charles-leclerc/_jcr_content/image.img.1920.medium.jpg/1646818893219.jpg";
        $viewData["driver1desc"] = "Born in the Mediterranean idyll of Monaco, Leclerc arrived in F1 on a tidal wave of expectation.
        Practically peerless on his way to the GP3 and Formula 2 crowns, he showcased a dazzling array of skills from scorching pole positions, commanding victories – even when his car caught fire twice at Silverstone – to an ability to muscle his way through the pack. Winning back-to-back championships also taught Leclerc how to handle pressure, another useful tool in the big pond of Formula 1 racing.
        Stepping up to F1 in 2018, Leclerc showed flashes of ballistic pace on Saturdays and racing brilliance on Sundays, dragging his Sauber beyond its limits – and earning himself a money-can’t-buy race seat at Ferrari for 2019, stepping into the shoes of the Scuderia’s last world champion, Kimi Raikkonen.
        There he immediately put the cat among the proverbial pigeons, unafraid to go wheel-to-wheel with established number one, Sebastian Vettel. A maiden F1 victory at Spa was followed by another a week later on Ferrari’s hallowed home turf of Monza. The tifosi had found another new hero – who then became the first man to out-score Vettel over a season with the Scuderia, a feat he repeated in crushing fashion the following year.";
        $viewData["driver2name"] = "Carlos Sainz";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/carlos-sainz/_jcr_content/image.img.1920.medium.jpg/1646818866749.jpg";
        $viewData["driver2desc"] = "He’s the matador from Madrid racing royalty.
        After entering F1’s Bull Ring paired alongside Max Verstappen at Toro Rosso in 2015, Sainz quickly showed his fighting spirit. A tenacious racer, he puts the car on the edge as he hustles his way through the pack. No wonder Sainz has earned the nickname Chilli.
        But the Spaniard is intelligent as well as instinctive, thinking his way through a race and into the points. This calm temperament follows him off track where he remains unfazed by the pressures of forging a Grand Prix career with a famous name.
        Sainz is the son of double World Rally champion, also his namesake, and has brought some of Dad’s driving skills to the F1 circuit – junior loves a delicious dose of drift for one.
        After following in his famous father’s tyre tracks, Sainz has had big racing boots to fill – first at McLaren where he replaced his childhood hero Fernando Alonso, and now at Ferrari, in the seat formerly owned by Sebastian Vettel. It is never easy living in the shadow of sporting giants, but Sainz has shown the drive and disposition to deal with it. Vamos!";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image1.img.1920.medium.jpg/1647107707871.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image2.img.1920.medium.jpg/1647085483435.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image3.img.1920.medium.jpg/1647000607750.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/gallery/image4.img.1920.medium.jpg/1647007136048.jpg";
        return view('teams.ferrari')->with("viewData", $viewData);
    }

    public function mercedes()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Mercedes-AMG Petronas F1 Team";
        $viewData["color"] = "#00D2BE";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/mercedes.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Mercedes’ modern F1 revival started with the creation of a works squad for 2010 - the platform for a meteoric rise up the Grand Prix order.
        The team generated huge excitement from the off with the sensational return of Michael Schumacher, but headlines soon followed on track: three podiums in their debut
         season, all via Nico Rosberg - who then claimed a breakthrough pole/victory double at China in 2012. The following season he was paired with Lewis Hamilton, the duo
          going on to stage some epic title battles as the Silver Arrows swept all before them to become one of the most dominant forces of the modern F1 era. And with
          Hamilton now partnered by steely Britt George Russell, Mercedes remain very much the team to beat…";
        $viewData["driver1name"] = "Lewis Hamilton";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/lewis-hamilton/_jcr_content/image.img.1920.medium.jpg/1647334259839.jpg";
        $viewData["driver1desc"] = "‘Still I Rise’ – these are the words emblazoned across the back of Lewis Hamilton’s helmet and tattooed across his shoulders, and ever since
        annihilating expectations with one of the greatest rookie performances in F1 history in 2007, that’s literally all he’s done: risen to the top of the all-time pole positions
        list ahead of his hero Ayrton Senna, surged into first place in the wins column surpassing the inimitable Michael Schumacher, and then matched the legendary German’s seven
        world titles.
        Is he the G.O.A.T? Few would deny that he’s in the conversation – and what’s more he’s got there his way, twinning his relentless speed with a refusal to conform to stereotypes
         for how a racing driver should think, dress or behave.
        Respect is hard earned in F1, but Hamilton – now Sir Lewis Hamilton to be precise – has it from every one of his peers. Why? Because they know that whatever the track, whatever
        the conditions, whatever the situation, when his visor goes down and the lights go out, it’s Hammertime.";
        $viewData["driver2name"] = "George Russell";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/george-russell/_jcr_content/image.img.1920.medium.jpg/1646750994602.jpg";
        $viewData["driver2desc"] = "He’s the driver with the motto: “If in doubt, go flat out”.
        George Russell has lived by it in his F1 career to date, out-qualifying seasoned team mate Robert Kubica at all 21 Grands Prix in his rookie season, putting Williams back on the podium in 2021, and landing a Mercedes race seat alongside Lewis Hamilton for 2022.
        That brilliant baseline speed served Russell well as he totted up titles on his way to Formula 1. The Briton stormed to the 2017 GP3 championship and delivered the 2018 Formula 2 crown under immense pressure.
        Spotting his potential, world champions Mercedes swooped to sign him to their junior programme in 2017, when Russell already had a DTM deal on the table. He banked more experience with practice sessions with Force India and tests for the Silver Arrows, before landing his Mercedes-powered Williams race drive.
        A refusal to cede ground to his rivals - and commitment to a tricky pass – underpins Russell’s winning mentality. And it’s what got him the call-up to replace Lewis Hamilton for a one-off Mercedes appearance for Sakhir 2020 when the reigning champ was struck down by Covid-19.
        That star turn saw Russell miss out on pole by just 0.026s and then outrace Mercedes stalwart Valtteri Bottas. Only a bungled pit stop and a heart-breaking late puncture prevented a near-certain maiden win for the up-and-coming super-sub.
        He kept his head down at Williams in 2021, scoring his first points and podium, all the while keeping his eye on the bigger prize. Having proved himself a hard worker and a tenacious talent, that prize arrived in the form of a chance to take on compatriot and seven-time champion Hamilton in identical machinery.
        A huge challenge, but as always, ‘Russell the Rocket’ will be going flat out.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image1.img.1920.medium.jpg/1647085167162.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image2.img.1920.medium.jpg/1647087350662.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image3.img.1920.medium.jpg/1647090476768.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/gallery/image4.img.1920.medium.jpg/1647091740679.jpg";
        return view('teams.mercedes')->with("viewData", $viewData);
    }

    public function redbull()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Oracle Red Bull Racing";
        $viewData["color"] = "#0600EF";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/red-bull-racing.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Red Bull were no strangers to F1 - as sponsors - prior to formally entering as a works team in 2004. Nonetheless, the scale of their success over the following decade was staggering. After a first podium in 2006, the team hit their stride in 2009, claiming six victories and second in the constructors' standings. Over the next four seasons they were a tour de force, claiming consecutive title doubles between 2010 and 2013, with Sebastian Vettel emerging as the sport's youngest quadruple champion. Now their hopes of recapturing that glory lie with an equally exciting talent – one named Max Verstappen…
        ";
        $viewData["driver1name"] = "Max Verstappen";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/max-verstappen/_jcr_content/image.img.1920.medium.jpg/1646819045507.jpg";
        $viewData["driver1desc"] = "He’s Max by name, and max by nature.
        Arriving as Formula 1’s youngest ever competitor at just 17 years old, Verstappen pushed his car, his rivals and the sport’s record books to the limit. The baby-faced Dutchman with the heart of a lion took the Toro Rosso – and then the Red Bull – by the horns with his instinctive racing style.
        F1’s youngest points scorer soon became its youngest race winner – at the age of 18 years and 228 days – with an opportunistic but controlled drive on debut for Red Bull in Barcelona 2016. A true wheel-to-wheel racer, another stunning drive in Brazil from the back of the pack to the podium on a treacherous wet track kept the plaudits coming.
        Verstappen’s no-holds-barred attitude and hard defending have sometimes landed him in hot water with his peers and paymasters. But the mistakes that initially marred his potential have given way to maturity, while the bravado and energy that make him a blockbuster talent have remained – and the victories have kept on coming, culminating in his first F1 drivers’ title following that already legendary, final-round showdown with Lewis Hamilton in 2021.
        The son of former F1 driver Jos Verstappen and super-quick karting Mum Sophie Kumpen, racing runs through his genes. Despite moving out of Dad’s house to live in Monaco, Verstappen remains close to his family, and though he’s not afraid to speak his mind, he can still be surprisingly shy.
        Having become the Netherlands' first world champion aged just 24, the expectations for the next generation’s leading light are sky high – but with Verstappen there’s a feeling that the sky’s the limit.";
        $viewData["driver2name"] = "Sergio Perez";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/sergio-perez/_jcr_content/image.img.1920.medium.jpg/1646819228700.jpg";
        $viewData["driver2desc"] = "He’s the fighter with a gentle touch from the land of the Lucha Libre.
        Perez’s reputation in F1 has been built on opposite approaches to Grand Prix racing. On the one hand, he is a punchy combatant who wrestles his way through the pack and into the points. Never afraid to add a bit of spice to his on-track encounters, even his team mates don’t always escape the Mexican’s heat.
        Then on the other hand, Perez is a smooth operator, a master at managing tyres to eke out extra performance and give him the upper hand on strategy. A firm favourite on the grid after his time with Sauber, McLaren, Force India and Racing Point, Perez has matured into an analytical racer and team player.
        A proud countryman, the Guadalajara gunslinger has amassed more points than any other Mexican in the history of F1. In Sakhir 2020 he also matched hero and compatriot Pedro Rodriguez by taking the chequered flag in first – a performance that landed him a seat with title contenders Red Bull.
        There he provided strong support to Max Verstappen’s 2021 championship-winning campaign, also adding another victory to his own tally. More wins may not be assured, especially with Verstappen as team mate, but Perez working hard and racing with his heart are.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/gallery/image1.img.1920.medium.jpg/1647107069242.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/gallery/image3.img.1920.medium.jpg/1647010572973.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/gallery/image6.img.1920.medium.jpg/1647090477521.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/gallery/image2.img.1920.medium.jpg/1647089854985.jpg";
        return view('teams.redbull')->with("viewData", $viewData);
    }

    public function mclaren()
    {
        $viewData = [];
        $viewData["title"] = "Mclaren - Online Store";
        $viewData["subtitle"] = "McLaren F1 Team";
        $viewData["color"] = "#FF8700";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/mclaren.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Since entering the sport in 1966 under the guidance and restless endeavour of eponymous founder Bruce, McLaren's success has been nothing short of breathtaking. Five glittering decades have yielded countless victories, pole positions and podiums, not to mention eight constructors' championships. What's more, some of the sport's greatest drivers made their names with the team, including Emerson Fittipaldi, Ayrton Senna, Mika Hakkinen and Lewis Hamilton...";
        $viewData["driver1name"] = "Daniel Riccardo";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/daniel-ricciardo/_jcr_content/image.img.1920.medium.jpg/1646818924510.jpg";
        $viewData["driver1desc"] = "The self-styled “Honey Badger” is fuzzy on the outside and feisty on the inside. Drivers beware because behind Ricciardo’s laidback persona and big grin is a razor-sharp racer with a bite.

        The Australian combines all-out speed with impressive race craft. Never afraid to push to the limits if it means pulling off a pass, Ricciardo is a proven race-winner, capable of consistently finishing at the business end of the championship table given the right machinery.

        A regular podium-finisher in his days with Red Bull, Ricciardo has christened the steps around the world with a dousing of Aussie culture – the ‘Shoey’ – as he quaffed champagne from a soggy racing boot. Yes it’s goofy, but the trademark celebration illustrates why he is loved for his sense of humour but never underestimated on track.

        His career’s next move to Renault’s works team in 2019 brought fresh challenges for the Perth pilot, but failed to deliver his dream of following Jack Brabham and Alan Jones as the next world champion from Down Under and he moved on to McLaren for 2021.

        There he has found a tough young team mate in Lando Norris, but has nevertheless returned to winning ways. Whatever happens next, Ricciardo is sure to keep on smiling.";
        $viewData["driver2name"] = "Lando Norris";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/lando-norris/_jcr_content/image.img.1920.medium.jpg/1646819013197.jpg";
        $viewData["driver2desc"] = "Lando Norris may not be named after Star Wars rebel Lando Calrissian - his Mum just liked the moniker - but he has flair and fighting spirit in bountiful supply.

        McLaren had the British teenager on their books for two years before fast-tracking him into F1’s galaxy of stars in 2019. A firecracker in his junior career, with a penchant for pole positions and wheel-to-wheel tussles, Norris didn’t let them down.

        Paired with the highly-rated – and far more experienced – Carlos Sainz, his rookie season was impressive, edging the Spaniard in their head-to-head qualifying battle, scoring points on 11 occasions, and only narrowly missing out on a top-10 championship placing. It was a similar pattern in 2020, with the affable Brit securing a maiden podium and moving up to ninth overall.

        His unstoppable rise continued in 2021, with a further four podiums and almost a race win as he dominated another more senior team mate, Daniel Ricciardo, to move up to P6 in the final driver standings.

        An exciting talent on track, away from it Norris brims with a modest charm and an artistic side sees him design and paint his own race gear as a hobby. The focus for the future is allying artistry and ambition on track as McLaren rely on the promise of youth to take them back to the top.

        Norris hopes the downforce will be with him…";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/gallery/image3.img.1920.medium.jpg/1646995316562.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/gallery/image4.img.1920.medium.jpg/1646932823104.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/gallery/image5.img.1920.medium.jpg/1645619394223.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/gallery/image6.img.1920.medium.jpg/1645693882401.jpg";
        return view('teams.mclaren')->with("viewData", $viewData);
    }

 /*   public function template()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Oracle Red Bull Racing";
        $viewData["color"] = "#ff2800";
        $viewData["carimage"] = "";
        $viewData["teamdesc"] = "";
        $viewData["driver1name"] = "";
        $viewData["driver1img"] = "";
        $viewData["driver1desc"] = "";
        $viewData["driver2name"] = "";
        $viewData["driver2img"] = "";
        $viewData["driver2desc"] = "";
        $viewData["carousel1"] = "";
        $viewData["carousel2"] = "";
        $viewData["carousel3"] = "";
        $viewData["carousel4"] = "";
        return view('teams.redbull')->with("viewData", $viewData);
    }
    */
}
