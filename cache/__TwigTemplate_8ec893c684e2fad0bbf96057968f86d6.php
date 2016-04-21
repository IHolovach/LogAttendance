<?php

/* students/students-base.html */
class __TwigTemplate_8ec893c684e2fad0bbf96057968f86d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'headcss' => array($this, 'block_headcss'),
            'headjavascript' => array($this, 'block_headjavascript'),
            'title' => array($this, 'block_title'),
            'headtitle' => array($this, 'block_headtitle'),
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
  ";
        // line 4
        $this->getBlock('head', $context, $blocks);
        // line 18
        echo "</head>
<body>
<br />
  <div id=\"header\" align=\"center\">
";
        // line 23
        $this->getBlock('header', $context, $blocks);
        // line 73
        echo "</div>
  <br />
  <div id=\"content\">";
        // line 76
        $this->getBlock('content', $context, $blocks);
        echo "</div>
  <div id=\"footer\" align=\"center\">
";
        // line 78
        $this->getBlock('footer', $context, $blocks);
        // line 79
        echo "  </div>
</body>
</html>
";
    }

    // line 6
    public function block_headcss($context, array $blocks = array())
    {
        echo "  
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"ui-theme/";
        // line 7
        echo (isset($context['ui_theme']) ? $context['ui_theme'] : null);
        echo "/jquery-ui.css\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"style.css\" />
  ";
    }

    // line 10
    public function block_headjavascript($context, array $blocks = array())
    {
        echo "    <script type=\"text/javascript\" src=\"js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"js/jquery.cookie.js\"></script>
\t<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
  ";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo "Школьный журнал";
    }

    // line 15
    public function block_headtitle($context, array $blocks = array())
    {
        echo "    <title>";
        // line 16
        $this->getBlock('title', $context, $blocks);
        echo "</title>
  ";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\" />
  ";
        // line 6
        $this->getBlock('headcss', $context, $blocks);
        // line 9
        echo "  ";
        // line 10
        $this->getBlock('headjavascript', $context, $blocks);
        // line 14
        echo "  ";
        // line 15
        $this->getBlock('headtitle', $context, $blocks);
        // line 17
        echo "  
  ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        echo "<table background=\"../images/37.jpg\"  width=100% >
<tr>
<td valign=\"bottom\"><p><a href=\"http://www.kpispu.info\"><img src=\"../images/spu.png\" alt=\"\" height=\"90\"></a></p></td>
<td width=20% ></td>
<td><img src=\"../images/main_text.png\" alt=\"\" height=\"80\"></td>
<td width=\"300px\">
<div style=\"text-align: right;\">
  <div style=\"display: inline-block;\"><br><font color=\"#00008B\" face=\"Century Gothic\">
  <strong><i>
  <script language=\"javascript\" type=\"text/javascript\"><!--
var d = new Date();

var day=new Array(\"Воскресенье\",\"Понедельник\",\"Вторник\",
\"Среда\",\"Четверг\",\"Пятница\",\"Суббота\");

var month=new Array(\"января\",\"февраля\",\"марта\",\"апреля\",\"мая\",\"июня\",
\"июля\",\"августа\",\"сентября\",\"октября\",\"ноября\",\"декабря\");

document.write(day[d.getDay()]+\" \" +d.getDate()+ \" \" + month[d.getMonth()]
+ \" \" + d.getFullYear() + \" г.\");
//--></script></i>
</strong></font>
</div></div></td>
</tr>
</table>

 <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"table_menu\" style=\"width:200px\">
  <tr>
    <td><img src=\"images/circle_left_top.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
    <td valign=\"top\" class=\"border_top\"><img src=\"images/border.gif\" alt=\"\" width=\"1\" height=\"1\"></td>
    <td><img src=\"images/circle_right_top.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
  </tr>
  <tr>
    <td class=\"border_left\">&nbsp;</td>
    <td class=\"padding\"><table>
      <tr>
        <td nowrap=\"nowrap\">&nbsp;<a href=\"index.php\">Просмотр оценок</a>&nbsp;</td>
        <td align=\"center\"><img src=\"../images/dec.png\" alt=\"\" width=\"1\" height=\"51\"></td>
        <td>&nbsp;<a href=\"login.php?action=logout\">Выход</a>&nbsp;</td>
      </tr>
    </table></td>
    <td class=\"border_right\">&nbsp;</td>
  </tr>
  <tr>
    <td><img src=\"images/circle_left_bottom.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
    <td width=\"99%\" valign=\"bottom\" class=\"border_bottom\"><img src=\"images/border.gif\" alt=\"\" width=\"1\" height=\"1\"></td>
    <td><img src=\"images/circle_right_bottom.gif\" alt=\"\" width=\"6\" height=\"6\"></td>
  </tr>
</table>
";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
    }

}
