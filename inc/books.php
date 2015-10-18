<?php

  function get_list_view_html($book_id, $book) {

    $output = '';

    $output = $output . '<li class="books__item">';
    $output = $output . '<a href="'  . 'book.php?id=' . $book_id . '" id="example">';
    $output = $output . '<div class="image"><img src="' . $book["img"] .'" alt="' . $book["title"] . '"></div>';
    $output = $output . '</a>';
    $output = $output . '<h6>' . $book["title"] . '</h6>';
    $output = $output . '</li>';

    return $output;
  }



  $books = array();

  $books[10878656787407986] = array(
    "title" => "Campbell Biology (9th Edition)",
    "edition" => "9th Edition",    
    "img" => "img/bookcover/RJ10878656787407986.png",
    "authors" => "Jane B. Reece, Lisa A. Urry, Michael L. Cain, Steven A. Wasserman, Peter V. Minorsky, Robert B. Jackson",
    "description" => "Campbell BIOLOGY is the unsurpassed leader in introductory biology. The text’s hallmark values—accuracy, currency, and passion for teaching and learning—have made it the most successful college introductory biology book for eight consecutive editions.",
    "pages" => "1464",
    "publisher" => "Benjamin Cummings; 9 edition (October 7, 2010)",
    "language" => "English",
    "ISBN-10" => "0321558235",
    "ISBN-13" => "978-0321558237",
    "category" => "biology"
  );

  $books[10878656787294986] = array(
    "title" => "Chemistry: The Central Science (13th Edition)",
    "edition" => "13th Edition",    
    "img" => "img/bookcover/BT10878656787294986.png",
    "authors" => "Theodore E. Brown, H. Eugene H LeMay, Bruce E. Bursten, Catherine Murphy, Patrick Woodward, Matthew E. Stoltzfus",
    "description" => "<p>Unrivaled problems, notable scientific accuracy and currency, and remarkable clarity have made Chemistry: The Central Science the leading general chemistry text for more than a decade. Trusted, innovative, and calibrated, the text increases conceptual understanding and student success in general chemistry by building on the expertise of the dynamic author team of leading researchers and award-winning professors.</p>
   
      <p>The new Thirteenth Edition builds on the Twelfth Edition’s major revision, in which every word and piece of art was scrutinized by all the authors to increase its effectiveness. Placing a greater emphasis on research, this edition is more tightly integrated with MasteringChemistry, the leading online homework, tutorial, and assessment program— resulting in an unparalleled teaching and learning package that personalizes learning and coaches students toward understanding and mastery of tough chemistry topics.</p>",
    "pages" => "1248",
    "publisher" => "Prentice Hall; 13 edition (January 11, 2014)",
    "language" => "English",
    "ISBN-10" => "0321910419",
    "ISBN-13" => "978-0321910417",
    "category" => "chemistry"
  );

  $books[10893057387294986] = array(
    "title" => "Calculus: An Intuitive and Physical Approach (Second Edition) (Dover Books on Mathematics)",
    "edition" => "",    
    "img" => "img/bookcover/KM10893057387294986.png",
    "authors" => "Morris Kline",
    "description" => "<p>Application-oriented introduction relates the subject as closely as possible to science. In-depth explorations of the derivative, the differentiation and integration of the powers of x, and theorems on differentiation and antidifferentiation lead to a definition of the chain rule and examinations of trigonometric functions, logarithmic and exponential functions, techniques of integration, polar coordinates, much more. Clear-cut explanations, numerous drills, illustrative examples. 1967 edition. Solution guide available upon request.</p>",
    "pages" => "960",
    "publisher" => "Dover Publications; Second Edition edition (June 19, 1998)",
    "language" => "English",
    "ISBN-10" => "0486404536",
    "ISBN-13" => "978-0486404530",
    "category" => "mathematics"
  );

  $books[10493457587228986] = array(
    "title" => "The Elegant Universe: Superstrings, Hidden Dimensions, and the Quest for the Ultimate Theory",
    "edition" => "",    
    "img" => "img/bookcover/GB10493457587228986.png",
    "authors" => "Brian Greene",
    "description" => "<p>Brian Greene, one of the world's leading string theorists, peels away layers of mystery to reveal a universe that consists of eleven dimensions, where the fabric of space tears and repairs itself, and all matter―from the smallest quarks to the most gargantuan supernovas―is generated by the vibrations of microscopically tiny loops of energy. The Elegant Universe makes some of the most sophisticated concepts ever contemplated accessible and thoroughly entertaining, bringing us closer than ever to understanding how the universe works.</p>",
    "pages" => "464",
    "publisher" => "W. W. Norton & Company; 2 edition (October 11, 2010)",
    "language" => "English",
    "ISBN-10" => "9.78039E+12",
    "ISBN-13" => "978-0393338102",
    "category" => "physics"
  );

  $books[10544402789478986] = array(
    "title" => "Molecular Biology of the Cell, 5th Edition",
    "edition" => "5th Edition",    
    "img" => "img/bookcover/AB10544402789478986.png",
    "authors" => "Bruce Alberts, Alexander Johnson, Julian Lewis, Martin Raff, Keith Roberts, Peter Walter ",
    "description" => "<p>For nearly a quarter century Molecular Biology of the Cell has been the leading cell biology textbook. This tradition continues with the new Fifth Edition, which has been completely revised and updated to describe our current, rapidly advancing understanding of cell biology. To list but a few examples, a large amount of new material is presented on epigenetics; stem cells; RNAi; comparative genomics; the latest cancer therapies; apoptosis (now its own separate chapter); and cell cycle control and the mechanics of M phase (now integrated into one chapter).</p>

     <p>The hallmark features of Molecular Biology of the Cell have been retained, such as its consistent and comprehensive art program, clear concept headings, and succinct section summaries. Additionally, in response to extensive feedback from readers, the Fifth Edition now includes several new features.</p>",
    "pages" => "1392",
    "publisher" => "Garland Science; 5th edition (November 16, 2007)",
    "language" => "English",
    "ISBN-10" => "0815341059",
    "ISBN-13" => "978-0815341055",
    "category" => "biology"
  );

  $books[10493457587228736] = array(
    "title" => "The Elegant Universe: Superstrings, Hidden Dimensions, and the Quest for the Ultimate Theory",
    "edition" => "",    
    "img" => "img/bookcover/GB10493457587228986.png",
    "authors" => "Brian Greene",
    "description" => "<p>Brian Greene, one of the world's leading string theorists, peels away layers of mystery to reveal a universe that consists of eleven dimensions, where the fabric of space tears and repairs itself, and all matter―from the smallest quarks to the most gargantuan supernovas―is generated by the vibrations of microscopically tiny loops of energy. The Elegant Universe makes some of the most sophisticated concepts ever contemplated accessible and thoroughly entertaining, bringing us closer than ever to understanding how the universe works.</p>",
    "pages" => "464",
    "publisher" => "W. W. Norton & Company; 2 edition (October 11, 2010)",
    "language" => "English",
    "ISBN-10" => "9.78039E+12",
    "ISBN-13" => "978-0393338102",
    "category" => "physics"
  );


?>
