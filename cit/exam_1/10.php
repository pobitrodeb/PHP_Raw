<!-- 10:
 Using switch case determine
 if an alphabet vowel or consonant. Vowels are a,e,i,o,u
 -->
 <?php
     $vowel = array("a", "e", "i", "o", "u"); 
     switch($vowel){
        case "a":
            echo "This alphabet is vowel";
            break;
        case "e":
            echo "This alphabet is vowel";
            break;
        case "i":
            echo "This alphabet is vowel";
            break;
        case "o":
            echo "This alphabet is vowel";
            break;
        case "u":
            echo "This alphabet is vowel";
            break;
            default:
            echo "This alphabet is constant";
     }
 ?>