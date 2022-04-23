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

    public function alpine()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "BWT Alpine F1 Team";
        $viewData["color"] = "#0090FF";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/alpine.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Alpine may be a relatively new name to Formula 1, but Renault’s famous sportscar arm has plenty of motorsport heritage. The 2021 rebrand of the team marked the next step in Renault’s F1 revival, begun in 2016 with the takeover of the then-Lotus squad. Already race winners in their new guise, regular podiums and a tilt at the title must be their next target…";
        $viewData["driver1name"] = "Fernando Alonso";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/fernando-alonso/_jcr_content/image.img.1920.medium.jpg/1647334212592.jpg";
        $viewData["driver1desc"] = "Michael Schumacher was the undisputed king of Formula 1 in the early 2000s, picking up wins and championships at a rate that was simply unheard of at the time. It was going to take someone very special to topple the Ferrari legend from his throne – and that it was Fernando Alonso who did it, tells you all you need to know about the Spaniard.

        Fiercely competitive, Alonso is not shy about his talent, rating himself as 9/10 “in everything”, and few in the know would disagree, with his performances in F1 characterised by blistering speed, brilliant tactical thinking, exemplary race craft, a razor-sharp eye for detail and a relentless determination to win.

        A serial record breaker in his early days, he was – at one time – F1’s youngest polesitter, race winner, world champion and double world champion as he gobbled up success with the Renault team. Even Alonso couldn’t continue that amazing run in his later career though, failing to add another title to his collection despite spells at McLaren and Ferrari.

        But after two years away from Formula 1 racing – and with two Le Mans wins in his pocket – Alonso returned with Alpine in 2021. And he has unfinished business with F1…";
        $viewData["driver2name"] = "Esteban Ocon";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/esteban-ocon/_jcr_content/image.img.1920.medium.jpg/1647334188097.jpg";
        $viewData["driver2desc"] = "If there’s one word that dominates Esteban Ocon’s career, it’s ‘sacrifice’.

        Back when he was just a promising karter, Ocon’s parents sold their house, put their jobs on hold, and began a life on the road, living in a caravan and travelling from circuit to circuit to support their son’s burgeoning career.

        Sacrifice, see – but it worked. 2014 saw Ocon break through in the world of single-seaters, as he beat a certain Max Verstappen to the European F3 title. Backed by Mercedes, he won the GP3 title the following year and was halfway through a season of DTM in 2016 when he was offered the chance to replace Rio Haryanto at the minnow Manor team from the Belgian Grand Prix onwards.

        That opportunity led to a full-time seat the following year with Force India, where his wheel-to-wheel duels with highly-rated team mate Sergio Perez quickly marked him out as a rising star. But when Lawrence Stroll, father of racer Lance, stepped in midway through 2018 to secure the squad’s financial future, the writing was on the wall for Ocon, who was moved aside at the end of the year to allow Stroll Jnr to join from Williams.

        Ocon bided his time, though, and after a year on the sidelines as Mercedes’ reserve driver, he found his way back into a race seat for 2020 with Renault, who became Alpine for 2021 – when his wait finally paid off, as he scored his – and the famous French marque’s – first F1 win.

        Nothing in Ocon’s motorsport career has come easy – but if Ocon has managed to return to the F1 grid and step atop the podium, it’s through a combination of self-belief, determination and a talent that’s up there with the very best.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Alpine/_jcr_content/gallery/image3.img.1920.medium.jpg/1647107707524.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Alpine/_jcr_content/gallery/image4.img.1920.medium.jpg/1647087657759.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Alpine/_jcr_content/gallery/image6.img.1920.medium.jpg/1647007443791.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Alpine/_jcr_content/gallery/image1.img.1920.medium.jpg/1646998131852.jpg";
        return view('teams.alpine')->with("viewData", $viewData);
    }
    public function alfaromeo()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Alfa Romeo F1 Team ORLEN";
        $viewData["color"] = "#900000";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/alfa-romeo.png.transform/6col/image.png";
        $viewData["teamdesc"] = "The name Alfa Romeo boasts Formula 1 connections dating back to the championship’s inception in 1950. Fast forward to the 21st century and Italian flare combines with Swiss sensibilities in a new era for the team formerly known as Sauber.

        Having enjoyed considerable success in world sportscars, where he helped nurture the emerging talents of future F1 stars Michael Schumacher and Heinz-Harald Frentzen, Peter Sauber guided his eponymous squad into F1 in 1993.

        The team has since established itself as a mainstay of the grid, becoming race winners under BMW’s brief ownership, and developing a well-earned reputation not only for producing competitive cars, but also for developing young drivers.";
        $viewData["driver1name"] = "Valtteri Bottas";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/valtteri-bottas/_jcr_content/image.img.1920.medium.jpg/1646819266274.jpg";
        $viewData["driver1desc"] = "Learning his craft on Finnish roads of ice and snow, he was born to be a Grand Prix racer.

        Bottas explains that if you can drive on the frozen roads of his homeland then you can drive anywhere. Then there’s the Finnish mentality –reserved, diligent and calm the fast lane of F1 doesn’t faze him.

        Making his F1 debut with Williams in 2013, Bottas soon became part of the family. Points and podiums followed with the reliable racer even amassing the most points without a win, a record he resented but that showcased his ability. The fact the Finn was such a points machine saw him suddenly promoted to the most coveted seat in F1 - Nico Rosberg’s vacant championship-winning seat at Mercedes.

        Bottas blossomed at the Silver Arrows in 2017, unleashing his pace to clock up personal pole positions and victories as well as a team championship for the famous Mercedes marque alongside Lewis Hamilton. He even tied with Hamilton and Sebastian Vettel with 13 podiums.

        For a shy guy, it brought a confidence boost and a new swagger – albeit in a very demur Finnish fashion. He would need all that confidence in 2018 – a season Bottas described as his worst in F1, as he took zero wins to Hamilton’s 11. That, though, was a reflection more of his team mate’s brilliance than of any shortcomings on his own part.

        Bottas stepped it up a level in 2019, four victories securing a convincing second in the championship behind Hamilton, but that dropped to two wins to his team mate's 11 in 2020 and then just one in 2021, prompting Mercedes to drop him after five seasons.

        For 2022 he starts a new chapter in his F1 career, replacing compatriot Kimi Raikkonen to lead an all-new line-up at Alfa Romeo, where he is charged with taking Chinese rookie Zhou Guanyu under his wing.";
        $viewData["driver2name"] = "Zhou Guanyu";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/guanyu-zhou/_jcr_content/image.img.1920.medium.jpg/1646818979975.jpg";
        $viewData["driver2desc"] = "China has never boasted a Grand Prix starter among its citizens – but Zhou Guanyu is the driver charged with changing that state of affairs, after receiving the call-up to make his F1 debut for Alfa Romeo in 2022.

        The Shanghai-born racer attended his home city’s inaugural Grand Prix in 2004 at the age of five, cheering on his hero Fernando Alonso. But having caught the racing bug, the Chinese driver then set himself the ambitious goal of becoming his country’s first-ever F1 racer – achieving a feat that Ma Qinghua, the only other Chinese driver to take part in a Formula 1 weekend, never managed.

        Showing boldness and dedication, Zhou put his plan into action by moving to England with his family aged just 12 to pursue his motorsport ambitions. A second-place finish in the 2015 Italian F4 championship proved Zhou was possessed of the right stuff – a fact already noted by Ferrari, who’d signed him to their driver academy a year earlier.

        A move to Renault’s academy for 2019 coincided with his debut in Formula 2, with Zhou building his confidence in the series via multiple wins and pole positions across three seasons, leading to him challenging for the drivers’ title in 2021.

        That was enough to convince Alfa Romeo Team Principal Fred Vasseur to put his faith in Zhou for 2022 and field him alongside ex-Mercedes racer Valtteri Bottas – allowing Zhou to achieve his dream of racing in F1, and even to see how he fares against his own childhood hero, Fernando Alonso.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Alfa-Romeo-Racing/_jcr_content/gallery/image1.img.1920.medium.jpg/1647088906995.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Alfa-Romeo-Racing/_jcr_content/gallery/image2.img.1920.medium.jpg/1647001847538.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Alfa-Romeo-Racing/_jcr_content/gallery/image3.img.1920.medium.jpg/1647082040701.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Alfa-Romeo-Racing/_jcr_content/gallery/image5.img.1920.medium.jpg/1646988164009.jpg";
        return view('teams.alfaromeo')->with("viewData", $viewData);
    }
    public function alphatauri()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Scuderia AlphaTauri";
        $viewData["color"] = "#2B4562";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/alphatauri.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Established in 2006 as a squad in which young drivers from Red Bull’s prodigious talent pool could cut their F1 teeth, AlphaTauri – originally named Toro Rosso – were formed from the ashes of the plucky Minardi team. Sebastian Vettel gave validity to the approach almost immediately, delivering a fairy-tale win in 2008, before going on to enjoy world championship success with parent team Red Bull Racing. Today the ethos of nurturing talent still holds true, though the Italian squad are no longer simply a ‘B team’ but a constructor in their own right...";
        $viewData["driver1name"] = "Pierre Gasly";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/pierre-gasly/_jcr_content/image.img.1536.medium.jpg/1646819179303.jpg";
        $viewData["driver1desc"] = "If there’s one man who knows how big a rollercoaster ride an F1 driver’s career can be, it’s Pierre Gasly!

The flying Frenchman was called up to make his 2017 debut in Malaysia in place of Daniil Kvyat and, after proving his mettle, he was named a Toro Rosso driver the following year.  A further 21 races into his fledgling career, Gasly was moved up again – this time to replace Red Bull big gun Daniel Ricciardo.

Gasly seemed to have a knack of being in the right place at the right time – a quality that’s equally handy on track. A series of impressive 2018 performances for Toro Rosso – including a brilliant fourth place in Bahrain – showed exciting promise for what he might do with the ‘A’ team in 2019.

Unfortunately that promise only appeared in flashes – and he quickly suffered from unfavourable comparisons with superstar team mate Max Verstappen. So much so that after the summer break, he was sent back to Toro Rosso, with another young up-and-comer – Alex Albon – being given a shot in the ‘senior’ Red Bull seat.

But Gasly bounced back, as only Gasly can. In the season’s remaining nine races he scored almost as many points as team mate Kvyat managed over the entire year – and secured his best-ever race result with P2 in Brazil. That trajectory continued in 2020, peaking with an emotional maiden win at the renamed AlphaTauri team’s home race in Italy, and didn’t let up in 2021 when he was back on the podium and scored 110 of the squad’s 142 points.

The question now is can he maintain momentum and earn himself another shot at the F1 bigtime…";
        $viewData["driver2name"] = "Yuki Tsunoda";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/yuki-tsunoda/_jcr_content/image.img.1536.medium.jpg/1648134405786.jpg";
        $viewData["driver2desc"] = "In the entire history of Formula 1, no Japanese driver has ever won a World Championship Grand Prix. Could Yuki Tsunoda be the first? Red Bull certainly think so, with the youngster very much on the path to their senior team if he continues to impress as he has done over the past few years.

Tsunoda's ascent to the top tier of motorsport was astonishingly rapid: he went from racing in Japanese F4 to a Formula 1 seat with AlphaTauri in just over three years, having arrived in Europe in 2019 with no knowledge of the circuits.

But after a slow start in F3, followed by a hugely impressive debut F2 campaign that saw him finish third in the championship and pick up three wins along the way, Tsunoda proved he had the speed and the race craft to force his way on to the F1 grid.

He may not have adapted to Grand Prix racing quite as quickly as he did to F2, but given time he could yet find himself battling at the very sharp end in a Red Bull.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/AlphaTauri/_jcr_content/gallery/image1.img.1536.medium.jpg/1647107383853.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/AlphaTauri/_jcr_content/gallery/image11.img.1536.medium.jpg/1647085482910.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/AlphaTauri/_jcr_content/gallery/image2.img.1536.medium.jpg/1647074597497.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/AlphaTauri/_jcr_content/gallery/image3.img.1536.medium.jpg/1647068441463.jpg";
        return view('teams.alphatauri')->with("viewData", $viewData);
    }
    public function williams()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Williams Racing";
        $viewData["color"] = "#005AFF";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/williams.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Driven on by the brilliance and passion of the late Sir Frank Williams, Williams grew from humble beginnings to become a Formula 1 behemoth, unrivalled by all except Ferrari and McLaren in terms of enduring success. Over the past four decades the team has racked up Grand Prix wins and championship glory, and in the process nurtured some of the greatest talents in the sport, both in and out the cockpit. Now, following the Williams family's decision to step aside after the sale of the team to Dorilton Capital, a new era begins...";
        $viewData["driver1name"] = "Nicholas Latifi";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/nicholas-latifi/_jcr_content/image.img.1536.medium.jpg/1646819118069.jpg";
        $viewData["driver1desc"] = "Thirteen is an advanced age to begin your karting career these days. But that’s how old Toronto native Nicholas Latifi was when he took his first steps in motorsport. Just 11 years later, he became a fully-fledged Formula 1 driver.

    That ascension into racing's top category was largely thanks to his most impressive season to date in Formula 2 in 2019, with Latifi – who’d finished a disappointing ninth in the series’ 2018 standings – pulling up his bootstraps to claim second in the championship. That result, combined with the Williams/Robert Kubica union failing to mesh in 2019, meant Williams made the call to promote their affable Canadian reserve driver to a full-time drive alongside George Russell for 2020.

    Latifi’s first taste of F1 machinery actually came all the way back in 2017, when he was given a test by Renault. Further duties with Force India followed in 2018 before he joined the Williams family in 2019. It was an annus horribilis for the squad, no doubt – but Latifi’s straightforward, friendly attitude and insightful feedback helped swing the vote in his favour for 2020.

    Now, after two seasons living in Russell’s shadow – and with Williams' form on the rise and a new team mate in the shape of ex-Red Bull racer Alex Albon – the goal is to show that that his eye-catching F2 year wasn’t just a fluke, and finally prove that he really has got what it takes to mix it with the best drivers in the world.";
        $viewData["driver2name"] = "Alexander Albon";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/alexander-albon/_jcr_content/image.img.1536.medium.jpg/1646750995556.jpg";
        $viewData["driver2desc"] = "Born in London but racing under the flag of Thailand, Alexander Albon’s first word was in fact Italian. That word was Ferrari – though it was with another Italian team that he got his big F1 break.

    Idolising Michael Schumacher and dreaming of one day racing in Formula 1, the junior Albon was pipped to the 2016 GP3 title by a certain Charles Leclerc. He then left his great friendship with George Russell trackside as he took the 2018 Formula 2 title fight down to the wire.

    Graduating to the F1 big league along with yet another contemporary – Lando Norris – in 2019, Albon did his talking on track with Toro Rosso in the opening races, earning a mid-season promotion to Red Bull Racing.

    A stylish over-taker with a championship mentality, Albon was unfazed by partnering Max Verstappen for the second half of his rookie season, taking top-six finishes in eight of his nine 2019 races with Red Bull.

    Staying in touch with the future champion proved tougher in 2020 and Red Bull dropped him from their race line-up. Crucially, though, Albon was retained as test and reserve driver, keeping him very much on team bosses’ radar, leading to his 2022 return to the grid with Williams.

    Laidback and cheerful with a cheeky grin, the Thai racer is popular among his peers – not always easy in motorsport’s cauldron of competition – but you don’t succeed in Formula 1 by being popular. Albon’s challenge now is a big one – to make the most of a rare second F1 opportunity.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Williams/_jcr_content/gallery/image2.img.1536.medium.jpg/1647107385013.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Williams/_jcr_content/gallery/image3.img.1536.medium.jpg/1647000606673.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Williams/_jcr_content/gallery/image4.img.1536.medium.jpg/1646933465093.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Williams/_jcr_content/gallery/image61.img.1536.medium.jpg/1646918456346.jpg";
        return view('teams.redbull')->with("viewData", $viewData);
    }

    public function astonmartin()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Aston Martin Aramco Cognizant F1 Team";
        $viewData["color"] = "#006F62";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/aston-martin.png.transform/6col/image.png";
        $viewData["teamdesc"] = "Aston Martin’s original Formula 1 foray – over half a century ago – lasted just five races. This time, though, it’s serious. This F1 squad are no strangers to success, having won in their original guise of Jordan and most recently as Racing Point in 2020. Renowned for their ability to punch above their weight, and now with a four-time champion leading their driver line-up, Aston Martin are very much a team to watch…";
        $viewData["driver1name"] = "Sebastian Vettel";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/sebastian-vettel/_jcr_content/image.img.1536.medium.jpg/1646818813887.jpg";
        $viewData["driver1desc"] = "Born and raised a Bull, then a Prancing Horse, and now the face of Aston Martin’s Formula 1 revival, F1's poster boy of early achievement had won more than all but two drivers in history by the time he was just 26, including back-to-back world titles between 2010 and 2013.

    Vettel’s trademark is pure pace – and of course his one-finger victory salute. In the chase to the chequered flag, he likes to lead from the front and just like his hero, Michael Schumacher. But for all his competitive streak, Vettel has a playful side too and has been known to let loose with a spot of Beatles karaoke - and baby can he drive a car.

    Alongside his four world crowns he can boast more than 50 pole positions and race victories, ranking him – statistically - above many of the biggest names in F1 history. No wonder then that he has twice been hand-picked to return some of Grand Prix oldest names to glory.

    Following his move to Maranello, that mission didn’t exactly go to plan as Vettel’s rivalry with Lewis Hamilton intensified. Then came an additional thorn in his side – young-gun Ferrari team mate Charles Leclerc, the first man to outscore him over a season at the Scuderia.

    His latest challenge is as Aston Martin’s team leader. He has already put them on the podium, but Vettel will need to call on all his speed and experience if he’s to regularly reassert himself over his rivals – and re-establish his reputation as one of the sport’s all-time greats.";
        $viewData["driver2name"] = "Lance Stroll";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/lance-stroll/_jcr_content/image.img.1536.medium.jpg/1648135171947.jpg";
        $viewData["driver2desc"] = "There is no such thing as too much too soon for Stroll, a teenage sensation with a wet weather predilection. One of the cool kids on the grid, Stroll was unveiled shortly after his 18th birthday by Williams – before he finished high school and got his road licence.

    Stroll meant business in his debut 2017 season, setting records on the way. An opportunistic racer he bounded onto the podium in Baku, the youngest rookie to do so. As the son of a wealthy entrepreneur, Stroll is used to a champagne lifestyle but now he knows the fizz tastes all the sweeter on the rostrum. Then in Monza he mastered the downpours to become the youngest driver in history to line up on the front row.

    A single-minded starter, the Canadian loves to make up places on the opening lap and fight through to the points. Stroll has the potential to be a long-term fixture in Formula 1 – as amply illustrated by a maiden pole and another two podiums in 2020.

    Those came after his father Lawrence led the consortium that took over Force India midway through the 2018 season, and then transformed it from Racing Point to Aston Martin for 2021. The future looks bright for both the team and their young driver – and even if it rains then Stroll can keep on motoring at the sharp end of the pack.";
        $viewData["carousel1"] = "https://www.formula1.com/content/fom-website/en/teams/Aston-Martin/_jcr_content/gallery/image1.img.1536.medium.jpg/1647090163949.jpg";
        $viewData["carousel2"] = "https://www.formula1.com/content/fom-website/en/teams/Aston-Martin/_jcr_content/gallery/image2.img.1536.medium.jpg/1647107385951.jpg";
        $viewData["carousel3"] = "https://www.formula1.com/content/fom-website/en/teams/Aston-Martin/_jcr_content/gallery/image3.img.1536.medium.jpg/1645704506318.jpg";
        $viewData["carousel4"] = "https://www.formula1.com/content/fom-website/en/teams/Aston-Martin/_jcr_content/gallery/image4.img.1536.medium.jpg/1645631773839.jpg";
        return view('teams.redbull')->with("viewData", $viewData);
    }

    public function haas()
    {
        $viewData = [];
        $viewData["title"] = "Team - Online Store";
        $viewData["subtitle"] = "Haas F1 Team";
        $viewData["color"] = "#ed1a3b";
        $viewData["carimage"] = "https://www.formula1.com/content/dam/fom-website/teams/2022/haas-f1-team.png.transform/6col/image.png";
        $viewData["teamdesc"] = "The youngest team on the grid, Haas made their highly impressive debut in 2016, and in the process became the first all-American-led F1 squad in three decades. Founded by industrialist Gene Haas, they are based in the United States on the same Kannapolis, North Carolina facility as his championship-winning NASCAR Sprint Cup Series team, Stewart-Haas Racing. The Ferrari-powered team, led by the charismatic Guenther Steiner, also have a UK factory in Banbury…";
        $viewData["driver1name"] = "Mick Schumacher";
        $viewData["driver1img"] = "https://www.formula1.com/content/fom-website/en/drivers/mick-schumacher/_jcr_content/image.img.1536.medium.jpg/1647334235171.jpg";
        $viewData["driver1desc"] = "Plenty of sons of former F1 drivers have joined the sport over the years – two have even emulated their fathers to become world champions – but carrying the Schumacher name is surely an extra level of pressure for Mick, given his father Michael’s extraordinary achievements in Formula 1.

But Schumacher Junior, a member of the Ferrari Driver Academy, arrived in F1 in 2021 with Haas after clinching the previous season’s F2 title in 2020, to add to the F3 championship he won in 2018 – so there was zero suggestion he had been elevated to the top level of motorsport because of his name.

It’s talent that brought him this far and he showed more of the same as he acclimatised to F1 in a tough rookie season, consistently outclassing his team mate in their uncompetitive machinery.

Now Schumacher must continue to impress if he is to one day follow in his father’s footsteps and claim a race seat with the Scuderia.";
        $viewData["driver2name"] = "Kevin Magnussen";
        $viewData["driver2img"] = "https://www.formula1.com/content/fom-website/en/drivers/kevin-magnussen/_jcr_content/image.img.1536.medium.jpg/1647447969295.jpg";
        $viewData["driver2desc"] = "Call him a lone ranger or a maverick, but Magnussen is back in Formula 1 for one reason only – to race.

He may be a second-generation F1 driver – following his father, Jan, onto the grid – but Magnussen’s idols are from the ‘golden era’ of Grand Prix racing when the likes of Juan Manuel Fangio and Stirling Moss risked it all for the love of the sport.

The Roskilde racer’s own prowess was proven on debut for McLaren, who guided him through the junior ranks, when he cruised into the top-three at the 2014 Australian Grand Prix, becoming the first Dane to claim a podium in F1.


Other champagne moments have been more difficult to find, as he left McLaren behind for a season with Renault, before settling in for four among kindred spirits at Haas. And now he’s back with the US team – after a year away in the States, racing Indy and sportscars among other things.

His meaty manoeuvres and elbows-out approach have earned him a bad-boy reputation on track, something that still leaves him baffled. Out of the car Magnussen is laidback and affable. After all he has his dream job – and he is only here to race.";
        $viewData["carousel1"] = "";
        $viewData["carousel2"] = "";
        $viewData["carousel3"] = "";
        $viewData["carousel4"] = "";
        return view('teams.haas')->with("viewData", $viewData);
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
