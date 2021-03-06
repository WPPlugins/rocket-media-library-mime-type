<?php
namespace rocket_media_library_mime_type;

class MimeType {
	
	private static $mime_types = array(
		"jpg"	=>array("extension"		=>"jpg|jpeg|jpe",
						"mime_type"		=>"image/jpeg",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 이미지 파일"),
		"png"	=>array("extension"		=>"png",
						"mime_type"		=>"image/png",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 이미지 파일"),
		"gif"	=>array("extension"		=>"gif",
						"mime_type"		=>"image/gif",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 이미지 파일"),
		"mp3"	=>array("extension"		=>"mp3|m4a|m4b",
						"mime_type"		=>"audio/mpeg",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 음악 파일"),
		"mov"	=>array("extension"		=>"mov|qt",
						"mime_type"		=>"video/quicktime",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 퀵 타임 플레이어 비디오 파일"),
		"avi"	=>array("extension"		=>"avi",
						"mime_type"		=>"video/avi",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 비디오 파일"),
		"wmv"	=>array("extension"		=>"wmv",
						"mime_type"		=>"video/x-ms-wmv",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 비디오 파일"),
		"mid"	=>array("extension"		=>"mid|midi",
						"mime_type"		=>"audio/midi",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> 음악 파일"),
		"pdf"	=>array("extension"		=>"pdf",
						"mime_type"		=>"application/pdf",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> PDF 파일"),
		"zip"	=>array("extension"		=>"zip",
						"mime_type"		=>"application/zip",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> zip 압축파일"),
		"gz"	=>array("extension"		=>"gz|gzip",
						"mime_type"		=>"application/x-gzip",
						"default_value"	=>"yes",
						"description"	=>"<i class='fa fa-wordpress'></i> gz 압축파일"),
		"hwp"	=>array("extension"		=>"hwp",
						"mime_type"		=>"application/hansofthwp",
						"default_value"	=>"",
						"description"	=>"한글 워드 파일"),
		"bmp"	=>array("extension"		=>"bmp",
						"mime_type"		=>"image/bmp",
						"default_value"	=>"",
						"description"	=>"이미지 파일"),
		"doc"	=>array("extension"		=>"doc",
						"mime_type"		=>"application/msword",
						"default_value"	=>"",
						"description"	=>"MS 워드 파일"),
		"ico"	=>array("extension"		=>"ico",
						"mime_type"		=>"image/x-icon",
						"default_value"	=>"",
						"description"	=>"아이콘 파일"),
		"xls"	=>array("extension"		=>"xla|xls|xlt|xlw",
						"mime_type"		=>"application/vnd.ms-excel",
						"default_value"	=>"",
						"description"	=>"엑셀 파일"),
		"ppt"	=>array("extension"		=>"pot|pps|ppt",
						"mime_type"		=>"application/vnd.ms-powerpoint",
						"default_value"	=>"",
						"description"	=>"MS 파워포인트 파일"),
		"ppam"	=>array("extension"		=>"ppam",
						"mime_type"		=>"application/vnd.ms-powerpoint.addin.macroEnabled.12",
						"default_value"	=>"",
						"description"	=>"MS 파워포인트 파일"),
		"pptm"	=>array("extension"		=>"pptm",
						"mime_type"		=>"application/vnd.ms-powerpoint.presentation.macroEnabled.12",
						"default_value"	=>"",
						"description"	=>"MS 파워포인트 파일"),
		"pptx"	=>array("extension"		=>"pptx",
						"mime_type"		=>"application/vnd.openxmlformats-officedocument.presentationml.presentation",
						"default_value"	=>"",
						"description"	=>"MS 파워포인트 파일"),
		"psd"	=>array("extension"		=>"psd",
						"mime_type"		=>"application/octet-stream",
						"default_value"	=>"",
						"description"	=>"psd 파일"),
		"mp4"	=>array("extension"		=>"mp4",
						"mime_type"		=>"video/mp4",
						"default_value"	=>"",
						"description"	=>"비디오 파일"),
		"webm"	=>array("extension"		=>"webm",
						"mime_type"		=>"video/webm",
						"default_value"	=>"",
						"description"	=>"비디오 파일"),
		"ogv"	=>array("extension"		=>"ogv",
						"mime_type"		=>"video/ogv",
						"default_value"	=>"",
						"description"	=>"비디오 파일"),

		"csv"	=>array("extension"		=>"csv",
						"mime_type"		=>"text/csv",
						"default_value"	=>"",
						"description"	=>"CSV 파일"),
		"ai"	=>array("extension"		=>"ai|eps|ps",
						"mime_type"		=>"application/postscript",
						"default_value"	=>"",
						"description"	=>"Adobe Illustrator 파일")
		);

	public static function get_mime_types(){
		return self::$mime_types;
	}
	
}
?>
