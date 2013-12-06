<?php

/* KubusBackendBundle:Lesson:show.html.twig */
class __TwigTemplate_a69924dbac97b519368154dded4843882e6b3b9da19d71fcaf9488791a783de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Lesson</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Courseid</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "courseId"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Stateid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stateId"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Beginat</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "beginAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Endat</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numberparticipantmin</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numberParticipantMin"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Participantsminnumber</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "participantsMinNumber"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Participantsmaxnumber</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "participantsMaxNumber"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Childcare</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "childCare"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publishat</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "publishAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Charge</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "charge"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Externurl</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "externUrl"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Graduationyear</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "graduationYear"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("lesson");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lesson_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "KubusBackendBundle:Lesson:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  137 => 66,  113 => 41,  148 => 83,  23 => 1,  20 => 1,  77 => 16,  53 => 18,  90 => 40,  70 => 25,  58 => 29,  34 => 4,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1219 => 355,  1209 => 349,  1200 => 347,  1196 => 346,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1141 => 321,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1032 => 283,  1029 => 282,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  892 => 225,  889 => 224,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  814 => 191,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  715 => 151,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  694 => 138,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  649 => 122,  640 => 119,  635 => 117,  617 => 112,  614 => 111,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  464 => 71,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  426 => 58,  414 => 52,  408 => 50,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  366 => 33,  363 => 32,  344 => 24,  342 => 23,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  299 => 8,  293 => 6,  290 => 5,  281 => 388,  276 => 381,  271 => 374,  266 => 366,  263 => 365,  255 => 353,  250 => 341,  248 => 336,  245 => 335,  233 => 304,  215 => 280,  212 => 279,  207 => 269,  197 => 249,  194 => 248,  191 => 246,  186 => 239,  184 => 233,  181 => 232,  174 => 217,  146 => 181,  134 => 161,  129 => 148,  114 => 111,  84 => 31,  76 => 38,  1618 => 590,  1614 => 588,  1612 => 587,  1609 => 586,  1602 => 581,  1600 => 580,  1598 => 579,  1595 => 578,  1590 => 575,  1579 => 573,  1574 => 572,  1571 => 571,  1568 => 570,  1559 => 565,  1556 => 564,  1552 => 562,  1546 => 560,  1543 => 559,  1540 => 558,  1534 => 556,  1528 => 554,  1525 => 553,  1522 => 551,  1502 => 549,  1499 => 548,  1496 => 547,  1493 => 546,  1490 => 545,  1487 => 544,  1484 => 543,  1481 => 542,  1479 => 541,  1476 => 540,  1473 => 539,  1470 => 538,  1467 => 537,  1464 => 536,  1461 => 535,  1458 => 534,  1454 => 533,  1452 => 532,  1449 => 531,  1442 => 524,  1436 => 522,  1430 => 520,  1428 => 519,  1426 => 518,  1423 => 517,  1416 => 510,  1412 => 508,  1405 => 506,  1402 => 502,  1398 => 501,  1393 => 500,  1390 => 499,  1383 => 497,  1380 => 492,  1375 => 491,  1372 => 490,  1369 => 489,  1366 => 488,  1351 => 486,  1348 => 485,  1344 => 484,  1341 => 483,  1323 => 482,  1321 => 481,  1319 => 381,  1316 => 479,  1308 => 473,  1306 => 472,  1304 => 471,  1302 => 469,  1299 => 468,  1290 => 464,  1285 => 462,  1283 => 461,  1280 => 460,  1272 => 455,  1261 => 453,  1259 => 452,  1239 => 451,  1236 => 450,  1227 => 445,  1224 => 444,  1221 => 356,  1218 => 442,  1216 => 354,  1213 => 440,  1204 => 435,  1201 => 434,  1198 => 433,  1195 => 432,  1193 => 345,  1190 => 344,  1181 => 426,  1179 => 425,  1176 => 424,  1169 => 418,  1164 => 417,  1162 => 416,  1159 => 415,  1151 => 408,  1145 => 406,  1143 => 322,  1135 => 404,  1130 => 403,  1127 => 402,  1121 => 400,  1118 => 320,  1116 => 398,  1113 => 397,  1104 => 393,  1098 => 313,  1094 => 390,  1089 => 389,  1083 => 386,  1080 => 385,  1077 => 305,  1075 => 383,  1072 => 382,  1066 => 374,  1060 => 372,  1058 => 371,  1055 => 370,  1049 => 369,  1047 => 368,  1039 => 367,  1036 => 284,  1033 => 365,  1027 => 281,  1021 => 359,  1019 => 358,  1016 => 276,  1010 => 356,  1008 => 355,  1002 => 354,  999 => 353,  996 => 352,  989 => 349,  986 => 348,  978 => 342,  972 => 340,  969 => 339,  963 => 337,  960 => 336,  954 => 334,  951 => 333,  945 => 331,  943 => 330,  939 => 243,  937 => 328,  921 => 327,  918 => 234,  915 => 233,  912 => 324,  909 => 323,  906 => 322,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 317,  888 => 316,  885 => 315,  883 => 314,  881 => 220,  878 => 219,  870 => 308,  867 => 307,  864 => 306,  861 => 305,  859 => 304,  856 => 303,  850 => 297,  843 => 294,  840 => 293,  837 => 292,  835 => 291,  828 => 197,  822 => 288,  819 => 287,  817 => 192,  812 => 190,  810 => 284,  808 => 283,  805 => 282,  797 => 278,  794 => 277,  792 => 276,  789 => 275,  781 => 271,  778 => 270,  776 => 269,  773 => 268,  764 => 169,  760 => 261,  756 => 165,  752 => 259,  747 => 258,  744 => 257,  738 => 255,  735 => 254,  733 => 253,  730 => 252,  721 => 153,  718 => 246,  712 => 150,  710 => 149,  706 => 242,  701 => 241,  698 => 240,  695 => 139,  689 => 137,  686 => 236,  684 => 235,  681 => 234,  673 => 229,  670 => 228,  668 => 227,  667 => 226,  666 => 126,  664 => 224,  661 => 223,  654 => 123,  643 => 120,  638 => 118,  634 => 209,  630 => 207,  624 => 205,  621 => 204,  619 => 113,  610 => 202,  607 => 201,  601 => 199,  598 => 107,  596 => 106,  593 => 105,  590 => 195,  588 => 194,  586 => 193,  583 => 192,  575 => 186,  573 => 185,  565 => 181,  562 => 180,  560 => 179,  547 => 93,  539 => 176,  537 => 175,  534 => 174,  527 => 91,  525 => 170,  521 => 168,  519 => 167,  517 => 166,  514 => 165,  507 => 160,  504 => 159,  498 => 158,  494 => 156,  492 => 155,  487 => 153,  483 => 152,  467 => 72,  458 => 148,  447 => 145,  441 => 143,  438 => 142,  436 => 141,  433 => 60,  431 => 139,  428 => 59,  420 => 133,  417 => 132,  415 => 131,  412 => 130,  405 => 49,  395 => 124,  389 => 120,  378 => 116,  372 => 115,  361 => 113,  357 => 112,  352 => 111,  350 => 26,  347 => 109,  340 => 105,  338 => 104,  335 => 21,  329 => 99,  324 => 98,  317 => 95,  310 => 92,  308 => 13,  303 => 90,  296 => 87,  291 => 85,  288 => 4,  275 => 81,  270 => 79,  260 => 363,  257 => 72,  253 => 342,  244 => 67,  239 => 65,  234 => 64,  231 => 63,  228 => 62,  225 => 298,  222 => 297,  213 => 57,  210 => 270,  205 => 54,  202 => 266,  188 => 48,  185 => 47,  172 => 41,  161 => 202,  127 => 75,  124 => 132,  118 => 46,  81 => 34,  65 => 31,  211 => 40,  198 => 37,  190 => 49,  152 => 84,  126 => 147,  104 => 90,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 147,  444 => 144,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 125,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 105,  337 => 22,  322 => 97,  314 => 94,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 86,  285 => 3,  283 => 83,  278 => 387,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 68,  241 => 66,  229 => 45,  220 => 290,  214 => 41,  177 => 42,  169 => 86,  140 => 22,  132 => 51,  128 => 49,  107 => 13,  61 => 7,  273 => 380,  269 => 94,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 77,  219 => 59,  217 => 289,  208 => 55,  204 => 267,  179 => 101,  159 => 196,  143 => 23,  135 => 53,  119 => 117,  102 => 46,  71 => 32,  67 => 26,  63 => 29,  59 => 6,  38 => 6,  94 => 57,  89 => 47,  85 => 19,  75 => 33,  68 => 6,  56 => 22,  87 => 35,  21 => 2,  26 => 9,  93 => 32,  88 => 38,  78 => 15,  46 => 14,  27 => 4,  44 => 14,  31 => 4,  28 => 3,  201 => 92,  196 => 51,  183 => 82,  171 => 216,  166 => 209,  163 => 89,  158 => 36,  156 => 85,  151 => 188,  142 => 29,  138 => 54,  136 => 168,  121 => 43,  117 => 42,  105 => 40,  91 => 36,  62 => 30,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 32,  72 => 13,  69 => 13,  47 => 17,  40 => 20,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 80,  131 => 45,  123 => 58,  120 => 18,  115 => 65,  111 => 41,  108 => 36,  101 => 89,  98 => 31,  96 => 67,  83 => 18,  74 => 30,  66 => 24,  55 => 5,  52 => 11,  50 => 14,  43 => 19,  41 => 9,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 38,  199 => 265,  193 => 50,  189 => 240,  187 => 84,  182 => 66,  176 => 223,  173 => 65,  168 => 72,  164 => 203,  162 => 82,  154 => 77,  149 => 182,  147 => 30,  144 => 70,  141 => 175,  133 => 78,  130 => 62,  125 => 44,  122 => 43,  116 => 54,  112 => 64,  109 => 50,  106 => 50,  103 => 39,  99 => 38,  95 => 42,  92 => 14,  86 => 28,  82 => 22,  80 => 27,  73 => 13,  64 => 21,  60 => 22,  57 => 11,  54 => 14,  51 => 13,  48 => 13,  45 => 17,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
