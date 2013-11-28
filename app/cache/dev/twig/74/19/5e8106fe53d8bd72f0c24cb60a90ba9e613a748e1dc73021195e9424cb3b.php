<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_74195e8106fe53d8bd72f0c24cb60a90ba9e613a748e1dc73021195e9424cb3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  702 => 470,  690 => 467,  682 => 465,  656 => 461,  645 => 460,  625 => 453,  618 => 451,  616 => 450,  602 => 449,  530 => 410,  520 => 406,  386 => 159,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  259 => 103,  232 => 88,  155 => 47,  353 => 149,  327 => 114,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  274 => 110,  265 => 105,  175 => 58,  462 => 202,  449 => 198,  446 => 197,  439 => 195,  429 => 188,  422 => 184,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  351 => 120,  348 => 140,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  300 => 105,  289 => 113,  286 => 112,  267 => 101,  262 => 98,  256 => 96,  226 => 84,  216 => 79,  200 => 72,  178 => 59,  165 => 83,  153 => 77,  150 => 55,  113 => 48,  170 => 84,  100 => 39,  23 => 1,  167 => 89,  160 => 85,  148 => 82,  137 => 66,  20 => 1,  77 => 37,  53 => 12,  90 => 42,  70 => 15,  58 => 25,  34 => 5,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1219 => 355,  1209 => 349,  1200 => 347,  1196 => 346,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1141 => 321,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1032 => 283,  1029 => 282,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  892 => 225,  889 => 224,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  814 => 191,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  715 => 151,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  694 => 468,  683 => 135,  680 => 134,  678 => 464,  675 => 463,  662 => 125,  658 => 124,  649 => 122,  640 => 119,  635 => 117,  617 => 112,  614 => 111,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  524 => 90,  515 => 404,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  464 => 71,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  426 => 58,  414 => 52,  408 => 176,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 156,  366 => 33,  363 => 153,  344 => 119,  342 => 137,  332 => 116,  316 => 16,  313 => 15,  311 => 14,  299 => 8,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  271 => 374,  266 => 366,  263 => 95,  255 => 101,  250 => 341,  248 => 97,  245 => 335,  233 => 87,  215 => 280,  212 => 78,  207 => 75,  197 => 69,  194 => 68,  191 => 67,  186 => 239,  184 => 63,  181 => 65,  174 => 65,  146 => 181,  134 => 39,  129 => 148,  114 => 111,  84 => 27,  76 => 34,  1618 => 590,  1614 => 588,  1612 => 587,  1609 => 586,  1602 => 581,  1600 => 580,  1598 => 579,  1595 => 578,  1590 => 575,  1579 => 573,  1574 => 572,  1571 => 571,  1568 => 570,  1559 => 565,  1556 => 564,  1552 => 562,  1546 => 560,  1543 => 559,  1540 => 558,  1534 => 556,  1528 => 554,  1525 => 553,  1522 => 551,  1502 => 549,  1499 => 548,  1496 => 547,  1493 => 546,  1490 => 545,  1487 => 544,  1484 => 543,  1481 => 542,  1479 => 541,  1476 => 540,  1473 => 539,  1470 => 538,  1467 => 537,  1464 => 536,  1461 => 535,  1458 => 534,  1454 => 533,  1452 => 532,  1449 => 531,  1442 => 524,  1436 => 522,  1430 => 520,  1428 => 519,  1426 => 518,  1423 => 517,  1416 => 510,  1412 => 508,  1405 => 506,  1402 => 502,  1398 => 501,  1393 => 500,  1390 => 499,  1383 => 497,  1380 => 492,  1375 => 491,  1372 => 490,  1369 => 489,  1366 => 488,  1351 => 486,  1348 => 485,  1344 => 484,  1341 => 483,  1323 => 482,  1321 => 481,  1319 => 381,  1316 => 479,  1308 => 473,  1306 => 472,  1304 => 471,  1302 => 469,  1299 => 468,  1290 => 464,  1285 => 462,  1283 => 461,  1280 => 460,  1272 => 455,  1261 => 453,  1259 => 452,  1239 => 451,  1236 => 450,  1227 => 445,  1224 => 444,  1221 => 356,  1218 => 442,  1216 => 354,  1213 => 440,  1204 => 435,  1201 => 434,  1198 => 433,  1195 => 432,  1193 => 345,  1190 => 344,  1181 => 426,  1179 => 425,  1176 => 424,  1169 => 418,  1164 => 417,  1162 => 416,  1159 => 415,  1151 => 408,  1145 => 406,  1143 => 322,  1135 => 404,  1130 => 403,  1127 => 402,  1121 => 400,  1118 => 320,  1116 => 398,  1113 => 397,  1104 => 393,  1098 => 313,  1094 => 390,  1089 => 389,  1083 => 386,  1080 => 385,  1077 => 305,  1075 => 383,  1072 => 382,  1066 => 374,  1060 => 372,  1058 => 371,  1055 => 370,  1049 => 369,  1047 => 368,  1039 => 367,  1036 => 284,  1033 => 365,  1027 => 281,  1021 => 359,  1019 => 358,  1016 => 276,  1010 => 356,  1008 => 355,  1002 => 354,  999 => 353,  996 => 352,  989 => 349,  986 => 348,  978 => 342,  972 => 340,  969 => 339,  963 => 337,  960 => 336,  954 => 334,  951 => 333,  945 => 331,  943 => 330,  939 => 243,  937 => 328,  921 => 327,  918 => 234,  915 => 233,  912 => 324,  909 => 323,  906 => 322,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 317,  888 => 316,  885 => 315,  883 => 314,  881 => 220,  878 => 219,  870 => 308,  867 => 307,  864 => 306,  861 => 305,  859 => 304,  856 => 303,  850 => 297,  843 => 294,  840 => 293,  837 => 292,  835 => 291,  828 => 197,  822 => 288,  819 => 287,  817 => 192,  812 => 190,  810 => 284,  808 => 283,  805 => 282,  797 => 278,  794 => 277,  792 => 485,  789 => 275,  781 => 271,  778 => 270,  776 => 269,  773 => 268,  764 => 169,  760 => 261,  756 => 165,  752 => 259,  747 => 258,  744 => 257,  738 => 255,  735 => 254,  733 => 253,  730 => 252,  721 => 153,  718 => 246,  712 => 150,  710 => 149,  706 => 472,  701 => 241,  698 => 469,  695 => 139,  689 => 137,  686 => 466,  684 => 235,  681 => 234,  673 => 462,  670 => 228,  668 => 227,  667 => 226,  666 => 126,  664 => 224,  661 => 223,  654 => 123,  643 => 120,  638 => 118,  634 => 209,  630 => 455,  624 => 205,  621 => 452,  619 => 113,  610 => 202,  607 => 201,  601 => 199,  598 => 107,  596 => 106,  593 => 105,  590 => 195,  588 => 194,  586 => 193,  583 => 192,  575 => 186,  573 => 185,  565 => 414,  562 => 180,  560 => 179,  547 => 411,  539 => 176,  537 => 175,  534 => 174,  527 => 409,  525 => 408,  521 => 168,  519 => 167,  517 => 166,  514 => 165,  507 => 160,  504 => 159,  498 => 158,  494 => 156,  492 => 155,  487 => 153,  483 => 152,  467 => 72,  458 => 148,  447 => 145,  441 => 196,  438 => 142,  436 => 141,  433 => 60,  431 => 189,  428 => 59,  420 => 133,  417 => 132,  415 => 180,  412 => 130,  405 => 49,  395 => 124,  389 => 160,  378 => 157,  372 => 115,  361 => 152,  357 => 123,  352 => 111,  350 => 26,  347 => 109,  340 => 145,  338 => 135,  335 => 134,  329 => 131,  324 => 113,  317 => 95,  310 => 92,  308 => 13,  303 => 106,  296 => 121,  291 => 102,  288 => 118,  275 => 105,  270 => 102,  260 => 363,  257 => 72,  253 => 100,  244 => 136,  239 => 65,  234 => 64,  231 => 83,  228 => 62,  225 => 298,  222 => 83,  213 => 78,  210 => 77,  205 => 54,  202 => 77,  188 => 90,  185 => 74,  172 => 57,  161 => 63,  127 => 35,  124 => 132,  118 => 49,  81 => 23,  65 => 11,  211 => 40,  198 => 37,  190 => 76,  152 => 46,  126 => 46,  104 => 32,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 144,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 125,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 22,  322 => 97,  314 => 94,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 86,  285 => 3,  283 => 115,  278 => 98,  268 => 373,  264 => 84,  258 => 94,  252 => 80,  247 => 68,  241 => 93,  229 => 87,  220 => 81,  214 => 41,  177 => 42,  169 => 86,  140 => 58,  132 => 47,  128 => 49,  107 => 13,  61 => 12,  273 => 380,  269 => 107,  254 => 92,  243 => 92,  240 => 326,  238 => 312,  235 => 89,  230 => 303,  227 => 86,  224 => 81,  221 => 77,  219 => 59,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 77,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 41,  21 => 2,  26 => 9,  93 => 47,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 92,  183 => 100,  171 => 216,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 29,  138 => 48,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 18,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 16,  111 => 47,  108 => 42,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 30,  66 => 32,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 50,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 60,  149 => 182,  147 => 75,  144 => 42,  141 => 73,  133 => 26,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 55,  99 => 23,  95 => 34,  92 => 28,  86 => 46,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 22,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
