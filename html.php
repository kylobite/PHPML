<?php
	class HTML {
		public static function parse($node,$attrs=array(),$str=null) {
			if (!empty($node)) {
				$html = "<{$node}";
				if (!empty($attrs)) foreach ($attrs as $attr => $value) $html .= " {$attr}=\"{$value}\"";
				$html .= ">";
				$not = array("area","base","br","col","command","embed","hr","img","input","link","meta","param","source");
				foreach ($not as $n) if ($node == $n) return $html;
				if (!empty($str)) $html .= "{$str}";
				$html .= "</{$node}>";
				return $html;
			} else return null;
		}
	}