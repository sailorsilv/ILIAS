<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_sas extends HFile
  {
      public function HFile_sas()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // SAS
          /*************************************/
          // Flags

          $this->nocase            	= "1";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple", "gray", "brown");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array();
          $this->unindent          	= array();

          // String characters and delimiters

          $this->stringchars       	= array();
          $this->delimiters        	= array("~", "!", "@", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array("*");
          $this->blockcommenton    	= array("/*");
          $this->blockcommentoff   	= array("*/");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "_null_" => "1",
            "abort" => "1",
            "array" => "1",
            "attrib" => "1",
            "and" => "1",
            "by" => "1",
            "call" => "1",
            "cards" => "1",
            "cards4" => "1",
            "center" => "1",
            "data" => "1",
            "delete" => "1",
            "do" => "1",
            "drop" => "1",
            "dim" => "1",
            "else" => "1",
            "end" => "1",
            "eof" => "1",
            "file" => "1",
            "format" => "2",
            "formchar" => "1",
            "footenote" => "1",
            "footenote1" => "1",
            "footenote2" => "1",
            "footenote3" => "1",
            "footenote4" => "1",
            "footenote5" => "1",
            "footenote6" => "1",
            "footenote7" => "1",
            "footenote8" => "1",
            "footenote9" => "1",
            "footenote10" => "1",
            "firstobs" => "1",
            "filename" => "1",
            "go" => "1",
            "if" => "1",
            "infile" => "1",
            "informat" => "1",
            "input" => "1",
            "in" => "1",
            "keep" => "1",
            "label" => "1",
            "length" => "1",
            "link" => "1",
            "lostcard" => "1",
            "ls" => "1",
            "libname" => "1",
            "left" => "1",
            "lrecl" => "1",
            "lastobs" => "1",
            "merge" => "1",
            "missing" => "1",
            "mtrace" => "1",
            "mprint" => "1",
            "min" => "1",
            "max" => "1",
            "mlogic" => "1",
            "missover" => "1",
            "mdy" => "1",
            "nonumber" => "1",
            "nobs" => "1",
            "nomprint" => "1",
            "nomtrace" => "1",
            "nosymbolgen" => "1",
            "noovp" => "1",
            "null" => "1",
            "over" => "1",
            "output" => "3",
            "out" => "2",
            "options" => "2",
            "or" => "1",
            "otherwise" => "1",
            "put" => "1",
            "ps" => "1",
            "pad" => "1",
            "rename" => "1",
            "retain" => "1",
            "return" => "1",
            "run" => "1",
            "rank" => "2",
            "select" => "1",
            "set" => "1",
            "skip" => "2",
            "stop" => "1",
            "symbolgen" => "1",
            "sum" => "1",
            "source2" => "1",
            "symput" => "1",
            "same" => "1",
            "substr" => "1",
            "then" => "1",
            "to" => "1",
            "title" => "1",
            "title1" => "1",
            "title2" => "1",
            "title3" => "1",
            "title4" => "1",
            "title5" => "1",
            "title6" => "1",
            "title7" => "1",
            "title8" => "1",
            "title9" => "1",
            "title10" => "1",
            "trim" => "1",
            "time" => "1",
            "until" => "1",
            "update" => "1",
            "where" => "1",
            "while" => "1",
            "window" => "1",
            "when" => "1",
            "as" => "2",
            "after" => "2",
            "append" => "2",
            "break" => "2",
            "calender" => "2",
            "catalog" => "2",
            "chart" => "2",
            "cimport" => "2",
            "class" => "2",
            "contents" => "2",
            "compare" => "2",
            "copy" => "2",
            "corr" => "2",
            "cport" => "2",
            "create" => "2",
            "column" => "2",
            "datasets" => "2",
            "define" => "2",
            "display" => "2",
            "ERROR" => "2",
            "endsas" => "2",
            "forms" => "2",
            "freq" => "3",
            "from" => "2",
            "group" => "2",
            "headline" => "2",
            "headskip" => "2",
            "id" => "2",
            "intervals" => "2",
            "into" => "2",
            "lifetest" => "3",
            "list" => "2",
            "line" => "2",
            "lsmeans" => "2",
            "method" => "2",
            "means" => "2",
            "model" => "2",
            "new" => "2",
            "noobs" => "2",
            "noprint" => "2",
            "n" => "2",
            "NOTE" => "2",
            "order" => "2",
            "obs" => "2",
            "outsurv" => "2",
            "proc" => "2",
            "print" => "2",
            "plots" => "2",
            "plot" => "2",
            "pmenu" => "2",
            "printto" => "2",
            "pageby" => "2",
            "report" => "2",
            "repeated" => "2",
            "sort" => "2",
            "spell" => "2",
            "strata" => "2",
            "standard" => "2",
            "summary" => "2",
            "sql" => "2",
            "split" => "2",
            "sumby" => "2",
            "tables" => "2",
            "tabulate" => "2",
            "test" => "2",
            "timeplot" => "2",
            "ttest" => "3",
            "table" => "2",
            "transpose" => "2",
            "uniform" => "2",
            "univariate" => "2",
            "var" => "2",
            "value" => "2",
            "v5tov6" => "2",
            "width" => "2",
            "WARNING" => "2",
            "aceclus" => "3",
            "anova" => "3",
            "calis" => "3",
            "cancorr" => "3",
            "candisc" => "3",
            "catmod" => "3",
            "cluster" => "3",
            "corresp" => "3",
            "discrim" => "3",
            "factor" => "3",
            "fastclus" => "3",
            "genmod" => "3",
            "glm" => "3",
            "glmmod" => "3",
            "inbreed" => "3",
            "lattice" => "3",
            "lifereg" => "3",
            "logistic" => "3",
            "mds" => "3",
            "mixed" => "3",
            "modeclus" => "3",
            "multtest" => "3",
            "nested" => "3",
            "nlin" => "3",
            "npar1way" => "3",
            "orthoreg" => "3",
            "phreg" => "3",
            "plan" => "3",
            "princomp" => "3",
            "prinqual" => "3",
            "reg" => "3",
            "rsreg" => "3",
            "score" => "3",
            "stepdisc" => "3",
            "template" => "3",
            "transreg" => "3",
            "tree" => "3",
            "varclus" => "3",
            "varcomp" => "3",
            "%bquote" => "4",
            "%display" => "4",
            "%do" => "4",
            "%end" => "4",
            "%else" => "4",
            "%eval" => "4",
            "%goto" => "4",
            "%global" => "4",
            "%if" => "4",
            "%include" => "4",
            "%input" => "4",
            "%keydef" => "4",
            "%label" => "4",
            "%let" => "4",
            "%local" => "4",
            "%macro" => "4",
            "%mend" => "4",
            "%put" => "4",
            "%str" => "4",
            "%scan" => "4",
            "%syscall" => "4",
            "%sysexec" => "4",
            "%sysrput" => "4",
            "%symget" => "4",
            "%symput" => "4",
            "%then" => "4",
            "%to" => "4",
            "%upcase" => "4",
            "%until" => "4",
            "%while" => "4",
            "%window" => "4",
            "MPRINT" => "4",
            "MLOGIC" => "4",
            "MTRACE" => "4",
            "SYMBOLGEN" => "4");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "2" => "donothing",
            "3" => "donothing",
            "4" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }