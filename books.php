<?php 
	
###################################################
#### Function to generate articles 
###################################################

		function generate_article($article) {
		foreach ($article as $articles) {
		echo '
                                    <!-- item -->
                                    <article class="item all explore">
                                        <div class="media_part">
                                            <div class="pic"><a href="' . $articles[0] . '" target="_blank"> <img src="' . $articles[1] . '" /></a>
                                            </div>
                                        </div>
                                        <div class="title_part"><a href="' . $articles[0] . '" target="_blank">' . $articles[2] . '</a></div>
									</article>
                                    <!-- / item -->
		';
		}
	}

###################################################
#### Function to Book Name for Subject
###################################################

	function gen_book($subject) {
		switch ($subject) {
			case "hindi":
				return 'Hindi - <font size="5"> रिमझिम  </font>';
				break;
			case "english":
				return 'English - Marigold';
				break;
			case "maths_english":
				return "Maths - Math Magic";
				break;
			case "maths_hindi":
				return 'Maths - <font size="5"> गणित का जादू </font>';
				break;
			default:
				return false;
		}
	}

	
###################################################
#### Function to Book Name for Subject
###################################################

	function gen_class_title($class) {
		switch ($class) {
			case "first":
				return 'Class - I';
				break;
			case "second":
				return 'Class - II';
				break;
			case "third":
				return "Class - III";
				break;
			case "fourth":
				return 'Class - IV';
				break;
			case "fifth":
				return 'Class - V';
				break;
			default:
				return false;
		}
	}
	
	
/*****************************************
	CLASS - FIRST
******************************************/


###################################################
#### First Hindi Books
###################################################

		$article["first"]["hindi"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/1/docs/Jhula.pdf",
						"ebooks/first/hindi/1 a  Jhula.gif",
						"Unit-1"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/2/docs/Aam%20ki%20tokri.pdf",
						"ebooks/first/hindi/2  Aam ki kahani.gif",
						"Unit-2"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/3/docs/Aam%20ki%20tokri.pdf",
						"ebooks/first/hindi/3 Aam ki tokri.gif",
						"Unit-3"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/4/docs/Patte.pdf",
						"ebooks/first/hindi/ch 4.gif",
						"Unit-4"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/5/docs/Pakodi.pdf",
						"ebooks/first/hindi/5 Pakodi.gif",
						"Unit-5"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/6/docs/Chhuk%20Gari.pdf",
						"ebooks/first/hindi/6 Chhuk Gari.gif",
						"Unit-6"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/7/docs/Rasoighar.pdf",
						"ebooks/first/hindi/7  Rasoighar.gif",
						"Unit-7"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/8/docs/Chuho%20Myoun.pdf",
						"ebooks/first/hindi/8 Chuho Myoun.gif",
						"Unit-8"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/9/docs/Bander%20Gilhari.pdf",
						"ebooks/first/hindi/9Bandar aur gilahari.gif",
						"Unit-9"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/10/docs/Pagri.pdf",
						"ebooks/first/hindi/10 Pagri.gif",
						"Unit-10"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/11/docs/Patang.pdf",
						"ebooks/first/hindi/11 Patang.gif",
						"Unit-11"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/12/docs/Gaind Balla.pdf",
						"ebooks/first/hindi/12 Gend.gif",
						"Unit-12"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/13/docs/Bander Gaya.pdf",
						"ebooks/first/hindi/13 Bander Gaya.gif",
						"Unit-13"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/14/docs/Ek Budia.pdf",
						"ebooks/first/hindi/14 Ek Budia.gif",
						"Unit-14"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/15/docs/Main Bhi.pdf",
						"ebooks/first/hindi/15 Main Bhi.gif",
						"Unit-15"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/16/docs/Lalu or Pilu.pdf",
						"ebooks/first/hindi/16 Lalu or Pilu.gif",
						"Unit-16"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/17/docs/Chaki.pdf",
						"ebooks/first/hindi/17 Chaki.gif",
						"Unit-17"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/18/docs/Chhoti Ka Kamaal.pdf",
						"ebooks/first/hindi/18 Chhoti Ka Kamaal.gif",
						"Unit-18"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/19/docs/chne.pdf",
						"ebooks/first/hindi/19 chne.gif",
						"Unit-19"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/20/docs/Budia Chala rahi chakki.pdf",
						"ebooks/first/hindi/20 Budia Chala rahi chakki.gif",
						"Unit-20"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/21/docs/Halim challa chand.pdf",
						"ebooks/first/hindi/21 Halim challa chand.gif",
						"Unit-21"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/22/docs/Hathi Challam.pdf", // link missing
						"ebooks/first/hindi/22 Hathi Challam.gif",
						"Unit-22"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0117-Rimjhim-I/23/docs/Saat Punchh.pdf",
						"ebooks/first/hindi/23 Saat Punchh.gif",
						"Unit-23"
				),				
	);

	
###################################################
#### First English Books
###################################################

		$article["first"]["english"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-1/docs/unit-1.pdf",
						"ebooks/first/english/unit-1.gif",
						"Unit-1"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-2/docs/unit-2.pdf",
						"ebooks/first/english/unit-2.gif",
						"Unit-2"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-3/docs/unit-3.pdf",
						"ebooks/first/english/unit-3.gif",
						"Unit-3"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-4/docs/unit-4.pdf",
						"ebooks/first/english/unit-4.gif",
						"Unit-4"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-5/docs/unit-5.pdf",
						"ebooks/first/english/unit-5.gif",
						"Unit-5"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-6/docs/unit-6.pdf",
						"ebooks/first/english/unit-6.gif",
						"Unit-6"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-7/docs/unit-7.pdf",
						"ebooks/first/english/unit-7.gif",
						"Unit-7"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-8/docs/unit-8.pdf",
						"ebooks/first/english/unit-8.gif",
						"Unit-8"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-9/docs/unit-9.pdf",
						"ebooks/first/english/unit-9.gif",
						"Unit-9"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-10/docs/unit-10.pdf",
						"ebooks/first/english/unit-10.gif",
						"Unit-10"
				),
	);

###################################################
#### First Mathematics Books - (Math-Magic)
###################################################

		$article["first"]["maths_english"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/1a/docs/1a.pdf",
						"ebooks/first/maths_english/1.pdf.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/2a/docs/2a.pdf",
						"ebooks/first/maths_english/2.pdf.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/3a/docs/3a.pdf",
						"ebooks/first/maths_english/3.pdf.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/4a/docs/4a.pdf",
						"ebooks/first/maths_english/4.pdf.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/5a/docs/5a.pdf",
						"ebooks/first/maths_english/5.pdf.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/6a/docs/6a.pdf",
						"ebooks/first/maths_english/6.pdf.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/7a/docs/7a.pdf",
						"ebooks/first/maths_english/7.pdf.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/8a/docs/8a.pdf",
						"ebooks/first/maths_english/8.pdf.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/9a/docs/9a.pdf",
						"ebooks/first/maths_english/9.pdf.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/10a/docs/10a.pdf",
						"ebooks/first/maths_english/10.pdf.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/11a/docs/11a.pdf",
						"ebooks/first/maths_english/11.pdf.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/first/maths_english/12.pdf.gif",
						"Unit-12",
				),
	);

###################################################
#### First Mathematics Books - (गणित का जादू)
###################################################

		$article["first"]["maths_hindi"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/1a/docs/1a.pdf",
						"ebooks/first/maths_hindi/Ch-01a.pdf.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/2a/docs/2a.pdf",
						"ebooks/first/maths_hindi/Ch-02a.pdf.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/3a/docs/3a.pdf",
						"ebooks/first/maths_hindi/Ch-03a.pdf.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/4a/docs/4a.pdf",
						"ebooks/first/maths_hindi/Ch-04a.pdf.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/5a/docs/5a.pdf",
						"ebooks/first/maths_hindi/Ch-05a.pdf.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/6a/docs/6a.pdf",
						"ebooks/first/maths_hindi/Ch-06a.pdf.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/7a/docs/7a.pdf",
						"ebooks/first/maths_hindi/Ch-07a.pdf.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/8a/docs/8a.pdf",
						"ebooks/first/maths_hindi/Ch-08a.pdf.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/9a/docs/9a.pdf",
						"ebooks/first/maths_hindi/Ch-09a.pdf.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/10a/docs/10a.pdf",
						"ebooks/first/maths_hindi/Ch-10a.pdf.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/11a/docs/11a.pdf",
						"ebooks/first/maths_hindi/Ch-11a.pdf.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/12a/docs/12a.pdf",
						"ebooks/first/maths_hindi/Ch-12a.pdf.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0120-Ganit%20Ka%20Jadoo%20Bhag-I%20-optimized/13a/docs/13a.pdf",
						"ebooks/first/maths_hindi/Ch-13a.pdf.gif",
						"Unit-13",
				),
		);

/*****************************************
	CLASS - SECOND
******************************************/

###################################################
#### Second Hindi Books
###################################################

		$article["second"]["hindi"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%201/docs/Chapter 1.pdf",
						"ebooks/second/hindi/Chapter 1.pdf.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%202/docs/Chapter 2.pdf",
						"ebooks/second/hindi/Chapter 2.pdf.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%203/docs/chapter 3.pdf",
						"ebooks/second/hindi/Chapter 3.pdf.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%204/docs/chapter 4.pdf",
						"ebooks/second/hindi/Chapter 4.pdf.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%205/docs/chapter 5.pdf",
						"ebooks/second/hindi/Chapter 5.pdf.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%206/docs/chapter 6.pdf",
						"ebooks/second/hindi/Chapter 6.pdf.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%207/docs/Chapter 7.pdf",
						"ebooks/second/hindi/Chapter 7.pdf.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%208/docs/chapter 8.pdf",
						"ebooks/second/hindi/Chapter 8.pdf.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%209/docs/chapter 9.pdf",
						"ebooks/second/hindi/Chapter 9.pdf.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2010/docs/chapter 10.pdf",
						"ebooks/second/hindi/Chapter 10.pdf.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2011/docs/Chapter 11.pdf",
						"ebooks/second/hindi/Chapter 11.pdf.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2012/docs/Chapter 12.pdf",
						"ebooks/second/hindi/Chapter 12.pdf.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2013/docs/Chapter 13.pdf",
						"ebooks/second/hindi/Chapter 13.pdf.gif",
						"Unit-13",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2014/docs/Chapter 14.pdf",
						"ebooks/second/hindi/Chapter 14.pdf.gif",
						"Unit-14",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2015/docs/Chapter 15.pdf",
						"ebooks/second/hindi/Chapter 15.pdf.gif",
						"Unit-15",
				),
	);

	
###################################################
#### Second English Books
###################################################

		$article["second"]["english"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-1/docs/unit-1.pdf",
						"ebooks/second/english/unit-1.pdf.gif",
						"Unit-1"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-2/docs/unit-2.pdf",
						"ebooks/second/english/unit-2.pdf.gif",
						"Unit-2"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-3/docs/unit-3.pdf",
						"ebooks/second/english/unit-3.pdf.gif",
						"Unit-3"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-4/docs/unit-4.pdf",
						"ebooks/second/english/unit-4.pdf.gif",
						"Unit-4"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-5/docs/unit-5.pdf",
						"ebooks/second/english/unit-5.pdf.gif",
						"Unit-5"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-6/docs/unit-6.pdf",
						"ebooks/second/english/unit-6.pdf.gif",
						"Unit-6"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-7/docs/unit-7.pdf",
						"ebooks/second/english/unit-7.pdf.gif",
						"Unit-7"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-8/docs/unit-8.pdf",
						"ebooks/second/english/unit-8.pdf.gif",
						"Unit-8"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-9/docs/unit-9.pdf",
						"ebooks/second/english/unit-9.pdf.gif",
						"Unit-9"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-10/docs/unit-10.pdf",
						"ebooks/second/english/unit-10.pdf.gif",
						"Unit-10"
				),
	);

###################################################
#### Second Mathematics Books - (Math-Magic)
###################################################

		$article["second"]["maths_english"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/1a/docs/1a.pdf",
						"ebooks/second/maths_english/1.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/2a/docs/2a.pdf",
						"ebooks/second/maths_english/2.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/3a/docs/3a.pdf",
						"ebooks/second/maths_english/3.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/4a/docs/4a.pdf",
						"ebooks/second/maths_english/4.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/5a/docs/5a.pdf",
						"ebooks/second/maths_english/5.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/6a/docs/6a.pdf",
						"ebooks/second/maths_english/6.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/7a/docs/7a.pdf",
						"ebooks/second/maths_english/7.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/8a/docs/8a.pdf",
						"ebooks/second/maths_english/8.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/9a/docs/9a.pdf",
						"ebooks/second/maths_english/9.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/10a/docs/10a.pdf",
						"ebooks/second/maths_english/10.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/11a/docs/11a.pdf",
						"ebooks/second/maths_english/11.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/12.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/13.gif",
						"Unit-13",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/14.gif",
						"Unit-14",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/15.gif",
						"Unit-15",
				),
	);

###################################################
#### Second Mathematics Books - (गणित का जादू)
###################################################

		$article["second"]["maths_hindi"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/1a/docs/1a.pdf",
						"ebooks/second/maths_hindi/1.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/2a/docs/2a.pdf",
						"ebooks/second/maths_hindi/2.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/3a/docs/3a.pdf",
						"ebooks/second/maths_hindi/3.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/4a/docs/4a.pdf",
						"ebooks/second/maths_hindi/4.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/5a/docs/5a.pdf",
						"ebooks/second/maths_hindi/5.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/6a/docs/6a.pdf",
						"ebooks/second/maths_hindi/6.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/7a/docs/7a.pdf",
						"ebooks/second/maths_hindi/7.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/8a/docs/8a.pdf",
						"ebooks/second/maths_hindi/8.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/9a/docs/9a.pdf",
						"ebooks/second/maths_hindi/9.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/10a/docs/10a.pdf",
						"ebooks/second/maths_hindi/10.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/11a/docs/11a.pdf",
						"ebooks/second/maths_hindi/11.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/12.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/13.gif",
						"Unit-13",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/14.gif",
						"Unit-14",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/15.gif",
						"Unit-15",
				),
	);

/*****************************************
	CLASS - THIRD
******************************************/

###################################################
#### Second Hindi Books
###################################################

		$article["second"]["hindi"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%201/docs/Chapter 1.pdf",
						"ebooks/second/hindi/Chapter 1.pdf.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%202/docs/Chapter 2.pdf",
						"ebooks/second/hindi/Chapter 2.pdf.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%203/docs/chapter 3.pdf",
						"ebooks/second/hindi/Chapter 3.pdf.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%204/docs/chapter 4.pdf",
						"ebooks/second/hindi/Chapter 4.pdf.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%205/docs/chapter 5.pdf",
						"ebooks/second/hindi/Chapter 5.pdf.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%206/docs/chapter 6.pdf",
						"ebooks/second/hindi/Chapter 6.pdf.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%207/docs/Chapter 7.pdf",
						"ebooks/second/hindi/Chapter 7.pdf.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%208/docs/chapter 8.pdf",
						"ebooks/second/hindi/Chapter 8.pdf.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%209/docs/chapter 9.pdf",
						"ebooks/second/hindi/Chapter 9.pdf.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2010/docs/chapter 10.pdf",
						"ebooks/second/hindi/Chapter 10.pdf.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2011/docs/Chapter 11.pdf",
						"ebooks/second/hindi/Chapter 11.pdf.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2012/docs/Chapter 12.pdf",
						"ebooks/second/hindi/Chapter 12.pdf.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2013/docs/Chapter 13.pdf",
						"ebooks/second/hindi/Chapter 13.pdf.gif",
						"Unit-13",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2014/docs/Chapter 14.pdf",
						"ebooks/second/hindi/Chapter 14.pdf.gif",
						"Unit-14",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class2/0217-Rimjhiml%20Bhag-II/Chapter%2015/docs/Chapter 15.pdf",
						"ebooks/second/hindi/Chapter 15.pdf.gif",
						"Unit-15",
				),
	);

	
###################################################
#### Second English Books
###################################################

		$article["second"]["english"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-1/docs/unit-1.pdf",
						"ebooks/second/english/unit-1.pdf.gif",
						"Unit-1"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-2/docs/unit-2.pdf",
						"ebooks/second/english/unit-2.pdf.gif",
						"Unit-2"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-3/docs/unit-3.pdf",
						"ebooks/second/english/unit-3.pdf.gif",
						"Unit-3"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-4/docs/unit-4.pdf",
						"ebooks/second/english/unit-4.pdf.gif",
						"Unit-4"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-5/docs/unit-5.pdf",
						"ebooks/second/english/unit-5.pdf.gif",
						"Unit-5"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-6/docs/unit-6.pdf",
						"ebooks/second/english/unit-6.pdf.gif",
						"Unit-6"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-7/docs/unit-7.pdf",
						"ebooks/second/english/unit-7.pdf.gif",
						"Unit-7"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-8/docs/unit-8.pdf",
						"ebooks/second/english/unit-8.pdf.gif",
						"Unit-8"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-9/docs/unit-9.pdf",
						"ebooks/second/english/unit-9.pdf.gif",
						"Unit-9"
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0118-Marigold%20Book-I-optimized/unit-10/docs/unit-10.pdf",
						"ebooks/second/english/unit-10.pdf.gif",
						"Unit-10"
				),
	);

###################################################
#### Second Mathematics Books - (Math-Magic)
###################################################

		$article["second"]["maths_english"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/1a/docs/1a.pdf",
						"ebooks/second/maths_english/1.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/2a/docs/2a.pdf",
						"ebooks/second/maths_english/2.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/3a/docs/3a.pdf",
						"ebooks/second/maths_english/3.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/4a/docs/4a.pdf",
						"ebooks/second/maths_english/4.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/5a/docs/5a.pdf",
						"ebooks/second/maths_english/5.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/6a/docs/6a.pdf",
						"ebooks/second/maths_english/6.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/7a/docs/7a.pdf",
						"ebooks/second/maths_english/7.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/8a/docs/8a.pdf",
						"ebooks/second/maths_english/8.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/9a/docs/9a.pdf",
						"ebooks/second/maths_english/9.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/10a/docs/10a.pdf",
						"ebooks/second/maths_english/10.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/11a/docs/11a.pdf",
						"ebooks/second/maths_english/11.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/12.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/13.gif",
						"Unit-13",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/14.gif",
						"Unit-14",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_english/15.gif",
						"Unit-15",
				),
	);

###################################################
#### Second Mathematics Books - (गणित का जादू)
###################################################

		$article["second"]["maths_hindi"] = array(
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/1a/docs/1a.pdf",
						"ebooks/second/maths_hindi/1.gif",
						"Unit-1",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/2a/docs/2a.pdf",
						"ebooks/second/maths_hindi/2.gif",
						"Unit-2",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/3a/docs/3a.pdf",
						"ebooks/second/maths_hindi/3.gif",
						"Unit-3",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/4a/docs/4a.pdf",
						"ebooks/second/maths_hindi/4.gif",
						"Unit-4",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/5a/docs/5a.pdf",
						"ebooks/second/maths_hindi/5.gif",
						"Unit-5",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/6a/docs/6a.pdf",
						"ebooks/second/maths_hindi/6.gif",
						"Unit-6",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/7a/docs/7a.pdf",
						"ebooks/second/maths_hindi/7.gif",
						"Unit-7",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/8a/docs/8a.pdf",
						"ebooks/second/maths_hindi/8.gif",
						"Unit-8",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/9a/docs/9a.pdf",
						"ebooks/second/maths_hindi/9.gif",
						"Unit-9",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/10a/docs/10a.pdf",
						"ebooks/second/maths_hindi/10.gif",
						"Unit-10",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/11a/docs/11a.pdf",
						"ebooks/second/maths_hindi/11.gif",
						"Unit-11",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/12.gif",
						"Unit-12",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/13.gif",
						"Unit-13",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/14.gif",
						"Unit-14",
				),
				array(
						"http://epathshala.nic.in/wp-content/doc/book/flipbook/Class%20I/0119-Math%20Magic%20Book-I-optimized/12a/docs/12a.pdf",
						"ebooks/second/maths_hindi/15.gif",
						"Unit-15",
				),
	);

?>