-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 09:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct275`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  `content1` varchar(3000) NOT NULL,
  `content2` varchar(3000) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `poster`, `background`, `content1`, `content2`, `user_name`, `created_at`, `updated_at`, `user_id`) VALUES
(0, 'Kingdom zombie Asia Session 2', '1631289559_153_Review-of-the-movie-Kingdom-zombie-Asia.jpg', 'Review-of-the-movie-Kingdom-zombie-Asia.jpg', 'Comments concerning the film Kingdom plot:\r\nKingdom set in time  Joseon when Korean peninsula are threatened by enemies inside and out of doors and the impression of pure disasters and epidemics. The purpose for that is the abuse of General Cho whereas the king was severely sick. Crown Prince Lee Chang was repeatedly Queen (daughter of General Cho) refused when he requested to see his father sick.\r\nThe movie’s story takes place within the Joseon Dynasty\r\nThe article opens with Crown Prince Lee Chang (performed by Ju Ji-hoon) and his shut bodyguard Mu-Yeong (Kim Sang-ho) leaving the capital Hanyang to research the thriller of the emperor’s sickness. Taking this chance, the sinister common Cho Hak-ju (Ryu Seung-ryong) and his daughter Queen Cho (Kim Hye-jun) search to depose the crown prince.\r\nOn the best way to search out the reality about his father, Lee Chang all of the sudden confronts an outbreak of an evil illness that turns us into aggressive bloodthirsty zombies, spreading pathogens by way of bites. With the assistance of feminine physician Seo-bi (Bae Doona) and the mysterious hunter Yeong-shin (Kim Sung-kyu), the crown prince has each discovered a solution to stop the unfold of the illness, whereas additionally dealing with the intrigues of the individuals. Cho Hak-ju’s ghost.\r\nThe magnificence of manufacturing scale\r\nCause Kingdom picture impression. By web page IMDb, every episode prices about 1.8 million USD funds – an enormous funding for an Asian TV sequence. 12 Episodes of two seasons scored by way of image high quality, sound, and setting. The movie is taken care of from a large context with palaces, villages, rugged mountains to small particulars akin to costumes and furnishings of the Joseon interval.', 'The secret of the epidemic in “Kingdom” might be revealed\r\nOne of the facets that helps the sequence “Kingdom” is liked in the world because of its unique storyline. Created by screenwriter Kim Eun-hee, the universe”Kingdom“brings wealthy content material with a solution to entice and entice viewers.\r\nReview of the film KingdomDirector Kim Seong-hun shared what he preferred most concerning the sequence, and defined that the infectious supply of the illness was from starvation in seasons 1 and a pair of, concerning the issues that every one individuals would do for the sake of their hearts. their greed. He additionally revealed that there will likely be some highlights to stay up for on this particular aspect story that’s thought of the start line of the story within the sequence.Kingdom”.\r\nTop inventive group\r\nKim Eun-hee is talked about because the well-known screenwriter behind the Korean blockbuster sequence like “Kingdom“, TV sequence “Signal“and film”Once in a Summer” with different works. Similarly, director Kim Seong-hun can be the one who contributed to the profitable creation of such a well-known sequence because the sequence “Kingdom” and movies like “A Hard Day” and “The Tunnel“.\r\nDirector Kim Seong-hun and screenwriter Kim Eun-hee\r\nAt the premiere of the spin-off episode “Kingdom: Ashin of the North“, director Kim Seong-hun also had his own share of screenwriter Kim Eun-hee: “We are really good partners. I really enjoy working with her.” He also shared the praise he used for screenwriter Kim Eun-hee that “”Kingdom: Ashin of the North” is her greatest work“. &Ldquo”Stupid” Jun Ji Hyun also gave important praise to the scriptwriter: “Kim Eun-hee was the principle purpose why I joined the movie. There’s no purpose for me to not reply!“\r\nMovie evaluation\r\nKingdom all the time is aware of find out how to impress the viewers proper from the primary episode. If season 1 of the film was the scene the place she was gnawed by monsters, then in season 2, it was a scene the place a bodyguard of nice man Ahn Hyeon voluntarily stayed to dam the gate and pierce the blade into his abdomen to protect it. climate.', 'Nguyen', '2023-04-13 09:05:25', '2023-04-13 13:41:59', 1),
(11, 'The Witch the place evil exists', 'Review-movie-The-Witch-where-evil-exists.jpg', '1632437927_574_Review-movie-The-Witch-where-evil-exists.jpg', 'The English countryside, amid dense unspoiled forests, provides to the colour scheme so darkish that it is more likely to make you assume it is a black-and-white film that heightens the spooky and illusory or the Witch’s.\r\n\r\nIf you wish to get pleasure from a fast-paced horror film with jumpscares that make your coronary heart skip a beat, The Witch will not make sense (though it nonetheless has jumpscare, however to a slight extent). However, in the event you want a film the place Everything occurs slowly and is equally difficult, after which closes with an ending that makes you assume, then you definately’ve come to the fitting place. A household has simply been banished to the forest for some purpose, as soon as topic to the judgment of the church. The couple and their 4 youngsters packed up their baggage, loaded it on the carriage, and walked away. They pray that their new life might be heat and peaceable. Of course it will by no means occur. <br> The Witches (2020) mercilessly criticized by overseas audiences as quickly because the movie was broadcast on HBO Max. The purpose for This is as a result of their childhood has all the time been accompanied by the success of the model The Witches (1990) so when this remake is launched, they’ll have a comparability and most of them will criticize the film due to the “Americanize” the story of England, on the similar time they don’t seem to be glad with the shortage of intelligence and superficiality within the adaptation info and the performing of the great solid. Only for Vietnamese viewers Or those that have not seen it, I’m hooked on overview that Witches, Witches nonetheless fairly engaging due to the novelty and strategies of the movie.', 'Pan Grossman’s view holds that:\r\n\r\n“The satan within the film didn’t come uninvited, the primary character summoned it. In that forest, she finds power and connection to the group she belongs to. It displays an actual phenomenon of wizarding guilds which have appeared. And it is no totally different from the blessing ceremonies I’ve been to.”\r\n\r\nThere is one problem that Pan Grossman most desires to alter: she desires to regulate the variety of witches current within the movie to 13 individuals, so it is going to be extra symbolic. Because the quantity 13 can also be a quantity “traditional” of the witch. This can also be a quantity that’s thought-about unfortunate by everybody and is sort of stigmatized by everybody. The Witch film overview Robert Eggers has studied plenty of historic paperwork associated to witchcraft and fashionable magic, particularly the bloodbath of alleged witches in Salem in 1692. In the work, Robert Eggers manifests himself. sympathetic look to the “real” demons. He delivers a compelling non secular movie, whereas on the similar time weaving collectively tales about our substance.\r\n\r\nThrough the above article, I’ve been with you The Witch film overview the place evil exists. We hope that the data offered above might be helpful to the readers. Thank you for taking the time to overview the article of reviewphim.internet.', 'Nam', '2023-04-13 12:54:51', '2023-04-13 13:01:52', 0),
(12, 'Marrowbone horror haunted mansion', 'Review-movie-Marrowbone-horror-haunted-mansion.jpg', '17378_4.jpg', '<b>Review of the film Marrowbone Haunted Mansion with a novel solid</b><br>The movie gathers a solid of younger individuals however is definitely roughly acquainted to moviegoers: Anya Taylor-Joy – well-known horror film goddess with a collection of hit works like The Witch, Split , Glass; Charlie Heaton – The shy Jonathan in Stranger Things; Mia Goth – the lady with a ghostly face who participated in A Cure For Wellness.<br><b>The movie is about in 1969</b><br>An English girl named Rose leads her younger kids to flee from her abusive husband to settle in a distant rural space of ​​America. However, as quickly as she arrived, Rose instantly fell critically unwell and died, leaving 4 kids at the moment, Jack (20 years outdated), Jane (19 years outdated), Billy (18 years outdated) and Sam (5 years outdated).<br>Fearing that the brothers will likely be separated as a result of Jack shouldn’t be sufficiently old to be a authorized consultant, the 4 siblings resolve to cover their mom’s demise and proceed with an advanced life, the 4 brothers deal with one another. and do Everything to be. Everything appeared to fall into oblivion till Jack acquired a letter from Potter, the lawyer employed by his mom to behave on the authorized proceedings to personal the outdated Marrowbone farm.', '<b>Notice the film</b><br>A piece with tight particulars, many emotional scenes that cleared the path to an sudden and humane ending. I do not learn about you, however I used to be fairly emotional after watching it, and George MacKay was a key consider making such a poor Jack potential, together with his convincing efficiency. The ladies generally have to organize some tissues.<br>Except for Psycho, Identity and Split, virtually all motion pictures associated to the theme of a number of personalities use this illness as a twist. And in actual fact, it by no means ceases to have good outcomes.You could discover some expressions associated to the primary character’s earlier psychological issues, cleverly planted by the director in Marrowbone. For instance, Jack is the one who opens the story, and people who open the playing cards largely maintain the important thing function; he repeatedly faints and wakes up inexplicably;\r\n\r\nFeeling dizzy when approaching the room the place the three corpses are positioned; mirrors, if not coated, are eliminated; solely Jack is allowed to depart the home; and culminating in Billy’s damage, as soon as he struggled within the chimney, the following day the eldest brother was additionally moist throughout.', 'Nguyen', '2023-04-13 13:07:28', '2023-04-13 13:08:39', 1),
(13, 'The Founder, enterprise lesson', '1629961816_308_Review-movie-The-Founder-business-lesson.jpg', 'Review-movie-The-Founder-business-lesson.jpg', 'The Founder\r\nThe Founder film overview This is the true story of the success of McDonald’s, coming from the empty arms of endurance within the inspiration of the Richard James brothers. If you’ve got ever tried to study in regards to the founders of superpower companies, maybe the identify Ray Kroc – McDonald’s “The Founder” should not have left a stranger. His life belongs to 2 opposing colours. It is a convincing feat that has contributed to altering the face of a whole business, and can also be a hidden nook within the technique of constructing the world’s largest quick meals empire. For actual individuals, the dedication can’t be ignored The Founder. It just isn’t usually that the story of a illustrious businessman is dropped at the massive display screen. The movie opens with a scene the place Ray Kroc is utilizing all his communication expertise to vary the mentality of a retailer proprietor who buys his milkshake machine. It was 1954. Ray’s firm is in disaster after a very long time earning money. However, he’s nonetheless within the center class. Having a home, a automotive, a spouse, however by no means sufficient At that point, once I wished to order meals, I ordered it, individuals would deliver a tray and the meals to hold on the automotive door for me, but it surely was a very long time to attend, or the improper dish. So from there, the 2 McDonald brothers discovered a approach to invent a quick, low cost meals chain that may deliver meals out in 30 seconds, and clients will stroll to the shop to purchase, not sit within the automotive anymore. . Note that as of late, issues like this chain are very uncommon, and virtually solely seem in mechanics, who would have considered having the ability to apply it to eating places. Then having an concept, they progressively upgraded their inspiration to be newer, extra full, and laid the muse for McDonald’s individuals know at the moment. Ray Kroc as soon as met the 2 McDonald brothers and witnessed that glorious kitchen, he thought, thought and felt that that is one thing that may create a breakthrough out there. It needs to be larger, extra individuals comprehend it, and to do it’s equally difficult. The subsequent day, he discovered the reply: franchise! And he drove all the way in which to the restaurant to persuade the 2 brothers.\r\n', '\r\nReview film The FounderHonestly, McDonald’s acquired this significance because of the invention of the 2 brothers, however to have a worldwide foothold as it’s now, it’s because of Kroc. When he wished to increase and alter the way in which of working to be extra progressive, the 2 McDonald brothers have been nervous about dropping its inherent id. People can collaborate, however not precisely what the mainstream restaurant is doing. For instance: including unhealthy dishes, promoting different drinks, adjusting recipes, and many others. Ray Kroc determined to go to the McDonald brothers’ store and felt that this was a particular gross sales mannequin. Consumers select gadgets with an very simple pre-determined menu. The cake recipe is organized in an especially scientific manner, making the ending velocity extraordinarily quick. Consumers select the meals, pay on the cashier and in addition obtain the meals there. Witnessing McDonald’s horrible buyer base, Ray Kroc instantly envisioned a situation when increasing McDonald’s to all featured cities throughout the United States. After witnessing the good success of the McDonald’s restaurant chain below the route of Ray Kroc, the McDonald brothers opened one other burger store known as The Big M with superior gadgets and one factor is going on eloquently that they’re the founders of McDonald’s and never Ray Kroc. The Founder film overview thought that with that benefit, the McDonald brothers would succeed with The Big M, however Ray Kroc noticed it as an act of aggression and was very offended: “We have to take those guys down now!”. What Ray Kroc did was open a McDonald’s restaurant throughout from The Big M. Through the above article, I’ve been with you The Founder film overview enterprise classes. We hope that the knowledge supplied above shall be helpful to the readers. Thank you for taking the time to overview the article of reviewphim.web.', 'Nam', '2023-04-13 13:46:37', '2023-04-13 13:46:37', 0),
(14, 'Into the Night hazard from the sky', 'Review-movie-Into-the-Night-danger-from-the-sky.jpg', '1630308503_514_Review-movie-Into-the-Night-danger-from-the-sky.jpg', 'Into the Night film evaluation This is a piece originating from the netflix home collected in a post-apocalyptic setting, a horror-fiction sequence with extraordinarily engaging data with distinctive colours. Into the Night Season 1 – a post-apocalyptic fantasy produced by Netflix, with each the setting and the theme being new and distinctive. However, there may be nonetheless an vital level to notice. If you might be merely looking forward to leisure, it is okay, however should you want a piece with a deep plot, tight connection, and appropriate love, it’s best to discover one other film title by Into the Night guarantees to make you indignant in lots of particulars. The movie opens with a flight stuffed with unrelated passengers, in contrast to in Wildtales. Suddenly, a stranger stole the safety guard’s gun and rushed onto the aircraft, overpowered the passengers and crew, and ordered take-off. He stammered about one thing that “if we don’t fly quickly, everyone will die”. It’s just like the film Bloodride of cinema Norway, every episode comes from Belgium This film is lower than 40 minutes lengthy, so in only one night time, you may fully apply the film. This additionally makes the film circuit quicker, extra participating, and actually watching an episode makes you simply wish to click on by to the subsequent episode instantly. The essential theme within the film and the content material of that episode additionally assist viewers perceive extra clearly in regards to the secret of the characters. Interesting level of Into The Night (2020) The essential factor is to provide the viewers a extra multi-dimensional view of an individual. Everyone has strengths and weaknesses in us, there’s a likelihood that you’ll hate a sure character at first, however while you perceive their story, you are feeling sympathy and even sympathy for them. that man. World cinema has a expertise to show seemingly peculiar issues into evil and so does Into the Night. The movie poses a scary speculation: Sunlight has turn out to be very harmful to people, simply having to method it could actually trigger lack of life. Faced with the prospect of the apocalypse, a gaggle of individuals stranded on a flight departing from Brussels to Moscow needed to always transfer west to cut back publicity to the solar. They face many risks, each from the inside and outside. Into the Night is sort of a 3-hour film. The director didn’t spend numerous time introducing the setting and characters, however immediately introduced the viewers to the aircraft. Audiences who crave velocity promise to like this job.', 'On that flight, Mathieu – the one pilot in addition to an important individual, as a result of with out him, they might not go anyplace. On the identical aircraft, they’ve to consider the place the subsequent vacation spot is, what time it takes to have the ability to “surpass” the solar.Review Into The Night: What\'s so dramatic about the journey to escape the sun?  - BlogAnChoi.  On May 1, Netflix released all 6 episodes of Into The Night with very attractive content about the apocalypse and disaster.  Into The Night is the movie of.  Dangers in the sky On that flight, Mathieu – the only pilot and also the most important person, because without him, they could not go anywhere.  On the same plane, they had to figure out where the next destination was, how long it would take to  Into the Night film evaluationRunning out of gasoline, engine issues or lack of meals can even kill them. As for the passengers on that flight, they might not sit nonetheless when demise was close to. Into The Night (2020) probably not spotless The movie circuit is pushed too quick, producing many awkward conditions, not sufficient logic and troublesome to alter the viewer’s mentality. The scene repeated many instances by the episodes makes the viewers really feel fairly boring and the feelings within the movie haven’t been pushed up, making it troublesome to go away an impression within the hearts of the viewers. Incredible remark for this half 7.5 / 10 women. As talked about above, the scene is kind of poor, missing in creativity when the scenes of airplanes flying within the sky are introduced forwards and backwards, giving the sensation that the aircraft goes round and never coming. Countries will not be the identical. The different angles within the film are fairly simple, frequent and only a few results used within the film. Similar to the picture, the sound of the movie is nothing particular, however it’s simply sufficient to explain the drama of the film’s content material. Really Tham Review shouldn’t be impressed with the soundtrack, hope this half 2 might be improved and supply some extra soundtrack songs to make the viewer really feel higher. Incredible remark for this half 6.5 / 10. Into the Night film evaluation The movie’s actors will not be too lovely, however they make an impression on the viewers, just a bit sorry that they cannot carry us a lot emotion. Reviewers fairly just like the actors of the film, perhaps I’ll give it a strive 8/10 Please. Through the above article, I’ve been with you Into the Night film evaluation hazard from the sky. We hope that the knowledge offered above might be helpful to the readers. Thank you for taking the time to evaluation the article of reviewphim.internet.\\', 'Nam', '2023-04-13 13:50:40', '2023-04-13 13:56:15', 0),
(15, 'The Victims’ Criminal Psychology Game', '1630937243_366_Review-movie-The-Victims-Criminal-Psychology-Game.jpg', 'Review-movie-The-Victims-Criminal-Psychology-Game.jpg', 'Netflix is ​​getting into the Asian market, with many well-invested unique sequence, and naturally they can not ignore the acquainted Chinese horror style. The Victims’ Game is probably the most distinctive work of this time. The movie brings as much as 8 episodes with a period of about an hour every, with many suspenseful dramatic developments. Extremely cheap for individuals who are planning to run a marathon. Phuong Nghi Nham is a forensic science pupil. With a capability to concentrate to element and a excessive degree of reasoning, blended with eccentricity, he’s typically teased by his buddies. Years later, the once-introverted younger man has now develop into an investigator, performing work at a police company and doesn’t appear to be very fashionable together with his associates. Opening the sequence of chosen tragedies is To Kha Van – a feminine singer who has handed her golden age. When the police arrived on the scene, her physique was now a pile of slime mendacity within the bathtub as a result of corrosion of some acid.I do not know a lot about film actors in Taiwan, nevertheless it’s actually enjoyable to look at the film as a result of the actors within the film are glorious and impressed me. The foremost character is a forensic investigation captain named Phuong Nghi Nham, since childhood he has had a particularly good investigative capability and information of reasoning and is passionate concerning the path of forensics. Mainly due to her ardour for work, Phuong gave up her household and spent all day frantically investigating instances. It may be mentioned that Phuong is a brilliant spot to assist the police be taught deeply into To Kha Van’s demise.\r\n', 'I’m fairly impressed with the Taiwanese detective style and a part of me was attracted by the trailer as a result of it was fairly ugly, and the horror motion pictures which might be Asian are past the desk. Indeed, after a couple of episodes of Season 1, The Victim’s Game actually “pulled” me into the case by curiosity and really suspenseful and surprising conditions. The Victim’s Game tells the story of the well-known feminine singer To Kha Van who was thought-about useless in a tub containing an acidic answer. In phrases of actual life, this can be a case that shouldn’t be regular and stuffed with twists and turns. Thereby, the police and the forensic staff needed to discover out deeply why To Kha Van died? Did she commit suicide or was somebody killed? The widespread level of the victims is that their lives are full of disappointment and no understanding from these round them. They really feel turned away by the entire society and step by step lose their very own worth in life. Review film The Victims’ Game Under the suggestion and steerage of Ly Nha Quan, they primarily entered the suicide circle the place this particular person died to gentle a candle for the following particular person to be observed. The inspiration that if I lived had no worth so let my demise converse for another person is loopy sufficient, caught and tragic sufficient. Through the above article, I’ve been with you Movie Review The Victims’ Game legal psychology. We hope that the data supplied above will likely be helpful to the readers. Thank you for taking the time to assessment the article of reviewphim.web.\r\n', 'Nguyen', '2023-04-13 13:51:59', '2023-04-13 13:51:59', 1),
(16, 'American Vandal Crime America', 'American-Vandal-Crime-America-Reviews-Movies.jpg', '1630763787_191_American-Vandal-Crime-America-Reviews-Movies.jpg', 'American Vandal college crime a film that’s in-built parody of flicks about crime psychology, however that is an unhygienic model and has a really enjoyable attribute. American Vandal Season 1 is a piece constructed on the fashion of parodying crime documentaries, in an unhygienic and extremely entertaining model. The movie is comparatively quick, 8 episodes lengthy and every episode is simply about half an hour lengthy. With a humorous, inventive interpretation, you may absolutely get pleasure from it proper now with out all the time having to fret about something. American Vandal Season 1 opens with a horrible scandal at Hanover High School: 27 automobiles within the parking zone are painted with an enormous c*. And but, he additionally deleted all of the movies recorded from the safety digital camera put in within the storage. The sole suspect within the case is Dylan Maxwell, a younger man described by the entire college as “the dumbest guy in the world”. Alex Trimboli – a classmate and Shapiro – a trainer on the college had been those who straight accused Dylan. Only just a few witnesses and Dylan’s girlfriend had been keen to face up for him. The hazard of being expelled within the final yr of highschool, not having the ability to go to University and being fined $100,000 is extraordinarily excessive. The video from a Twitter account named Plug has garnered greater than 1.5 million views inside 15 hours. Then the World Star Hip Hop web site reposted it with the title “Terrible: Students Quit Enemas at School Lunch!”. The video additionally attracted greater than 1 million views and made numerous folks suppose that this was an actual joke. American Vandal does not go huge, however goes straight to the scholars’ depraved jokes moderately than the actual crimes. Part 1 of the movie is a case of drawing 23 male genitals on college automobiles, and half 2 is a journey to seek out the one who “slaughtered” the varsity with enema.\r\n  American Vandal college crime nIf you are a fan of documentaries like Don’t F**okay with Cats or Making a Murderer, you are in all probability aware of its presentation: face-to-face interviews with folks within the viewers. interviews, close-ups of related areas, timelines displayed on the display screen, precise pictures from the courtroom, simulation of the scene utilizing 3D know-how, and so on., and clouds. All of these issues are utterly reproduced in American Vandal, solely extra elaborate. It would simply be an Adam Sandler-style foolish commodity however no, the movie has a thick sufficient character line and a decent connection between the main points primarily based on the testimony of insiders. In addition, the truth that two “detectives” Sam and Peter are keen to convict their colleagues make American Vandal Season 1 extra enticing than ever, turning a seemingly innocuous movie right into a critical one. curious. It is believed that after this primary documentary, the 2 younger males can transfer to work ', 'American Vandal college crime a film that’s in-built parody of flicks about crime psychology, however that is an unhygienic model and has a really enjoyable attribute. American Vandal Season 1 is a piece constructed on the fashion of parodying crime documentaries, in an unhygienic and extremely entertaining model. The movie is comparatively quick, 8 episodes lengthy and every episode is simply about half an hour lengthy. With a humorous, inventive interpretation, you may absolutely get pleasure from it proper now with out all the time having to fret about something. American Vandal Season 1 opens with a horrible scandal at Hanover High School: 27 automobiles within the parking zone are painted with an enormous c*. And but, he additionally deleted all of the movies recorded from the safety digital camera put in within the storage. The sole suspect within the case is Dylan Maxwell, a younger man described by the entire college as “the dumbest guy in the world”. Alex Trimboli – a classmate and Shapiro – a trainer on the college had been those who straight accused Dylan. Only just a few witnesses and Dylan’s girlfriend had been keen to face up for him. The hazard of being expelled within the final yr of highschool, not having the ability to go to University and being fined $100,000 is extraordinarily excessive. The video from a Twitter account named Plug has garnered greater than 1.5 million views inside 15 hours. Then the World Star Hip Hop web site reposted it with the title “Terrible: Students Quit Enemas at School Lunch!”. The video additionally attracted greater than 1 million views and made numerous folks suppose that this was an actual joke. American Vandal does not go huge, however goes straight to the scholars’ depraved jokes moderately than the actual crimes. Part 1 of the movie is a case of drawing 23 male genitals on college automobiles, and half 2 is a journey to seek out the one who “slaughtered” the varsity with enema.\r\n  American Vandal college crime nIf you are a fan of documentaries like Don’t F**okay with Cats or Making a Murderer, you are in all probability aware of its presentation: face-to-face interviews with folks within the viewers. interviews, close-ups of related areas, timelines displayed on the display screen, precise pictures from the courtroom, simulation of the scene utilizing 3D know-how, and so on., and clouds. All of these issues are utterly reproduced in American Vandal, solely extra elaborate. It would simply be an Adam Sandler-style foolish commodity however no, the movie has a thick sufficient character line and a decent connection between the main points primarily based on the testimony of insiders. In addition, the truth that two “detectives” Sam and Peter are keen to convict their colleagues make American Vandal Season 1 extra enticing than ever, turning a seemingly innocuous movie right into a critical one. curious. It is believed that after this primary documentary, the 2 younger males can transfer to work ', 'Nguyen', '2023-04-13 13:52:40', '2023-04-13 13:52:40', 1),
(17, 'World struggle 1917 new colours about struggle', '1631636410_281_Review-of-world-war-1917-new-colors-about-war.jpg', 'dsd.jpg', '1917 – a novel movie in regards to the struggle, when the director’s ingenious association made it really feel just like the movie was shot with a single shot, which I’ve solely seen in Birdman on the time. previous to. However, bringing good outcomes, and particularly the human which means of the movie, it’s attainable to see with the bare eye, not needing to make use of a microscope. Called a struggle film, nevertheless, anybody can use it totally with out feeling drained or yawn throughout viewing. The younger man as soon as shone within the high quality horror movie Marrowbone. In addition, Colin Firth, Mark Strong, and Benedict Cumberbatch additionally featured on a near-guest mission in 1917. The movie takes the viewers to observe Schofield and Blake – two corporals assigned by General Erinmore to ship an pressing telegram to Colonel Mackenzie, with the content material asking to postpone the assault order as a result of the Nazis have already deployed troops and simply ready for the British to hurry in. From right here, the 2 troopers progressively embark on a journey stuffed with smoke and fireplace, with demise all the time lurking close by. 1917 Set in World War I, director Sam Mendes “restores” historical past based mostly on his grandfather’s story. The movie follows two ruling troopers, Blake (Dean-Charles Chapman) and Will (George McKay), who’re assigned the function of bringing the armistice to the entrance strains to forestall 1600 troopers from falling into the entice of the Germans. .Review World War 1917: A 2-hour film with only one panning won 3 Oscars - BlogAnChoi.  World War 1917 - although it did not win the Best Picture Oscar 2020 but made the audience change their view of the war movie genre.  The main content of the movie World War 1917-1917 is set in World War I, directed by Sam Mendes  Not solely that, General Erinmore (Colin Firth) additionally declares that if Blake and Will don’t carry the armistice letter by tomorrow morning, all troopers, together with Blake’s brother, will die. Blake, anxious and decided to save lots of his brother, accepted the function with eyes blazing with enthusiasm. And Will is extra afraid as a result of the 2 of them should cross the trenches, cross the border the place the fierce preventing, the rain of bombs and bullets and the physique is full. Praised by critics. The work consists of many cleverly assembled scenes, making the entire movie appear like there is just one shot. To execute this job, director Sam Mendes, cinematographer Roger Deakins and a crew of feats of choreography.', 'They constructed all of the scenes with miniature fashions, then created the true set. At the scene in Wiltshire (UK), they dug a 1.5km trench equipment to report. Each scene is fastidiously calculated when it comes to distance and house in order that filmmakers have room to maneuver and observe the character’s actions. Review of World War 1917 cThat’s the way in which of filming that this a part of the evaluation will talk about in additional element within the picture part. Thanks to the above distinctive capturing method, viewers really feel as if they’re primarily the third corporal, going together with Blake and Schofield to hurry to the entrance line to do the duty. The honesty and brutality in every episode of the movie makes the viewers perceive extra in regards to the emotions and judgments of younger individuals who have to depart their households to sacrifice themselves in that struggle. 1917 comparatively attention-grabbing and enticing as a result of the viewers doesn’t know what difficulties and risks are ready for the two corporals forward. The movie’s tempo is comparatively quick and there would not appear to be a second for the viewer to relaxation, in line with the urgency of the movie’s story. Nevertheless, 1917 There are nonetheless scenes that quiet down, clearly depicting humanity, friendship and wartime comradeship. Still, there are occasions 1917 makes you’re feeling a bit boring and the ending of the film shouldn’t be actually what you anticipate for a struggle film. There is not any preventing and resistance between the 2 opponents, there are only a few epic and voyeuristic explosions, however the movie simply depicts a particularly small function of the postmen. Therefore, don’t anticipate an excessive amount of from the film. Review of World War 1917 follows two British Corporals stationed within the North of France, Blake (Dean-Charles Chapman) and Schofield (George MacKay). On April 6, 1917, they acquired an pressing mission to ship an pressing telegram to the entrance line – 2nd Battalion Denvos. At this time, the Denvos military was getting ready to assault after the Nazis had retreated. However, the British Command suspected that the enemy was setting a entice, so he ordered a halt to the assault. Through the above article, I’ve been with you Review of World War 1917 Novel colours of struggle. We hope that the knowledge supplied above shall be helpful to the readers. Thank you for taking the time to evaluation the article of reviewphim.web.', 'Nam', '2023-04-13 13:54:07', '2023-04-13 13:54:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `location`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(0, 'Trần Quốc Nam', 'Vĩnh Long', '0123456789', 'namb1910262@student.ctu.edu.vn', '123', '2023-04-13 09:05:25', '2023-04-13 09:05:25'),
(1, 'Mai Nguyễn Khánh Nguyên', 'Cần Thơ', '0123456788', 'nguyenb1910266@student.ctu.edu.vn', '123', '2023-04-13 09:05:25', '2023-04-13 09:05:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
