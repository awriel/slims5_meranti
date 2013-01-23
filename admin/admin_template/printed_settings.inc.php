<?php
/**
 * SENAYAN application printable data configuration
 *
 * Copyright (C) 2007,2008  Arie Nugraha (dicarve@yahoo.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

// label print settings
/* measurement in cm */
$page_margin = 0.2;
$items_per_row = 3;
$items_margin = 0.05;
$box_width = 8;
$box_height = 3.3;
$include_header_text = 1; // change to 0 if dont want to use header in each label
$header_text = ''; // keep empty if you want to use Library Name as a header text
$fonts = "Arial, Verdana, Helvetica, 'Trebuchet MS'";
$font_size = 11;
$border_size = 1; // in pixels

// item barcode print settings
/* measurement in cm */
$barcode_page_margin = 0.2;
$barcode_items_per_row = 3;
$barcode_items_margin = 0.1;
$barcode_box_width = 7;
$barcode_box_height = 5;
$barcode_include_header_text = 1; // change to 0 if dont want to use header in each barcode
$barcode_cut_title = 50; // maximum characters in title to appear in each barcode. change to 0 if you dont want the title cutted
$barcode_header_text = ''; // keep empty if you want to use Library Name as a header text
$barcode_fonts = "Arial, Verdana, Helvetica, 'Trebuchet MS'"; // font to use
$barcode_font_size = 11;
$barcode_scale = 70; // barcode scale in percent relative to box width and height
$barcode_border_size = 1; // in pixels

// member card print settings
/* measurement in cm */
$card_page_margin = 0.2;
$card_items_per_row = 2;
$card_items_margin = 0.1;
$card_box_width = 12;
$card_box_height = 6;
$card_header_text = $sysconf['library_name'];
$card_photo_width = 3;
$card_photo_height = 3;
$card_fonts = "Arial, Verdana, Helvetica, 'Trebuchet MS'"; // font to use
$card_font_size = 11;
$card_barcode_scale = 70; // barcode scale in percent relative to box width and height
$card_include_field_label = 1; // set 0 if you don't want to show field label in card
$card_border_size = 1; // in pixels

// barcode generator print settings
$barcodegen_box_width = 6;
$barcodegen_page_margin = 0.2;
$barcodegen_items_margin = 0.05;
$barcodegen_include_border = 0;

/* Receipt Printing */
$receipt_width = '15cm';
$receipt_font = 'serif';
$receipt_color = '#000';
$receipt_margin = '5px';
$receipt_padding = '5px';
$receipt_border = '1px dashed #000';
$receipt_fontSize = '7pt';
$receipt_header_fontSize = '8pt';
$receipt_titleLength = 100;

// label include barcode print settings
/* This source modified by Muh Tarom (http://irigomi.com) on Friday, 05 October 2012*/
/* measurement in cm */
$labcode_page_margin = 0.2;
$labcode_items_per_row = 2;
$labcode_items_margin = 0.1;
$labcode_box_width = 9.6;
$labcode_box_height = 4.4;
$labcode_include_header_text = 1; // change to 0 if dont want to use header in each barcode
$labcode_cut_title = 50; // maximum characters in title to appear in each barcode. change to 0 if you dont want the title cutted
$labcode_header_text = "PERPUSTAKAAN <br /> SMK NEGERI 1 BAWANG"; // keep empty if you want to use Library Name as a header text
$labcode_fonts = "Arial, Verdana, Helvetica, 'Trebuchet MS'"; // font to use
$labcode_font_size = 11;
$labcode_scale = 200;
$labcode_border_size = 1; // in pixels

// Book Card print settings
/* This source modified by Muh Tarom (http://irigomi.com) on Friday, 21 December 2012*/
/* measurement in cm */
		$bookcard_page_margin = 0.2;
		$bookcard_items_per_row = 2;
		$bookcard_width = 9;
		$bookcard_height = 10; //tinggi minimal kartu buku untuk kertas A4 / minimals height recomended for A4 paper
		$bookcard_include_header_text = 1; // change to 0 if dont want to use header in each book card
		$bookcard_header_text = ''; // keep empty if you want to use Library Name as a header text
		$bookcard_cut_title = 36; // maximum characters in title to appear in each book card. change to 0 if you dont want the title cutted
		$bookcard_cut_authors = 36; // maximum characters in authors to appear in each book card. change to 0 if you dont want the authors cutted
		$bookcard_fonts = "Arial, Verdana, Helvetica, 'Trebuchet MS'"; // font to use
		
// Book Slip print settings
/* This source modified by Muh Tarom (http://irigomi.com) on Tuesday, 25 December 2012*/
/* measurement in cm */
		$bookslip_page_margin = 0.2;
		$bookslip_items_per_row = 2;
		$bookslip_width = 9;
		$bookslip_height = 20; //tinggi minimal kartu buku untuk kertas A4 / minimals height recomended for A4 paper
		$bookslip_include_header_text = 1; // change to 0 if dont want to use header in each book card
		$bookslip_header_text = ''; // keep empty if you want to use Library Name as a header text
		$bookslip_cut_title = 36; // maximum characters in title to appear in each book card. change to 0 if you dont want the title cutted
		$bookslip_cut_authors = 36; // maximum characters in authors to appear in each book card. change to 0 if you dont want the authors cutted
		$bookslip_fonts = "Arial, Verdana, Helvetica, 'Trebuchet MS'"; // font to use

?>
