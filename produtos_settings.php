<?php



$tdataprodutos = array();
$tdataprodutos[".searchableFields"] = array();
$tdataprodutos[".ShortName"] = "produtos";
$tdataprodutos[".OwnerID"] = "";
$tdataprodutos[".OriginalTable"] = "produtos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataprodutos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataprodutos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataprodutos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsprodutos = array();
$fieldToolTipsprodutos = array();
$pageTitlesprodutos = array();
$placeHoldersprodutos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsprodutos["Portuguese(Brazil)"] = array();
	$fieldToolTipsprodutos["Portuguese(Brazil)"] = array();
	$placeHoldersprodutos["Portuguese(Brazil)"] = array();
	$pageTitlesprodutos["Portuguese(Brazil)"] = array();
	$fieldLabelsprodutos["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersprodutos["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersprodutos["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["Unidade"] = "Unidade";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["Unidade"] = "";
	$placeHoldersprodutos["Portuguese(Brazil)"]["Unidade"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["Fornecedor"] = "Fornecedor";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["Fornecedor"] = "";
	$placeHoldersprodutos["Portuguese(Brazil)"]["Fornecedor"] = "";
	$fieldLabelsprodutos["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsprodutos["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersprodutos["Portuguese(Brazil)"]["Quantidade"] = "";
	$pageTitlesprodutos["Portuguese(Brazil)"]["add"] = "Adicionar Novo Produto";
	$pageTitlesprodutos["Portuguese(Brazil)"]["edit"] = "Editar Produto [{%ID}]";
	$pageTitlesprodutos["Portuguese(Brazil)"]["export"] = "Exportar Produtos";
	$pageTitlesprodutos["Portuguese(Brazil)"]["import"] = "Importar Produtos";
	if (count($fieldToolTipsprodutos["Portuguese(Brazil)"]))
		$tdataprodutos[".isUseToolTips"] = true;
}


	$tdataprodutos[".NCSearch"] = true;



$tdataprodutos[".shortTableName"] = "produtos";
$tdataprodutos[".nSecOptions"] = 0;

$tdataprodutos[".mainTableOwnerID"] = "";
$tdataprodutos[".entityType"] = 0;

$tdataprodutos[".strOriginalTableName"] = "produtos";

		 



$tdataprodutos[".showAddInPopup"] = false;

$tdataprodutos[".showEditInPopup"] = false;

$tdataprodutos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprodutos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprodutos[".listAjax"] = false;
//	temporary
$tdataprodutos[".listAjax"] = false;

	$tdataprodutos[".audit"] = true;

	$tdataprodutos[".locking"] = false;


$pages = $tdataprodutos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataprodutos[".edit"] = true;
	$tdataprodutos[".afterEditAction"] = 0;
	$tdataprodutos[".closePopupAfterEdit"] = 1;
	$tdataprodutos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataprodutos[".add"] = true;
$tdataprodutos[".afterAddAction"] = 0;
$tdataprodutos[".closePopupAfterAdd"] = 1;
$tdataprodutos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataprodutos[".list"] = true;
}



$tdataprodutos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataprodutos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataprodutos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataprodutos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataprodutos[".printFriendly"] = true;
}



$tdataprodutos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataprodutos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataprodutos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataprodutos[".isUseAjaxSuggest"] = true;

$tdataprodutos[".rowHighlite"] = true;





$tdataprodutos[".ajaxCodeSnippetAdded"] = false;

$tdataprodutos[".buttonsAdded"] = false;

$tdataprodutos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprodutos[".isUseTimeForSearch"] = false;


$tdataprodutos[".badgeColor"] = "3CB371";


$tdataprodutos[".allSearchFields"] = array();
$tdataprodutos[".filterFields"] = array();
$tdataprodutos[".requiredSearchFields"] = array();

$tdataprodutos[".googleLikeFields"] = array();
$tdataprodutos[".googleLikeFields"][] = "ID";
$tdataprodutos[".googleLikeFields"][] = "Nome";
$tdataprodutos[".googleLikeFields"][] = "Unidade";
$tdataprodutos[".googleLikeFields"][] = "Quantidade";
$tdataprodutos[".googleLikeFields"][] = "Fornecedor";



$tdataprodutos[".tableType"] = "list";

$tdataprodutos[".printerPageOrientation"] = 0;
$tdataprodutos[".nPrinterPageScale"] = 100;

$tdataprodutos[".nPrinterSplitRecords"] = 40;

$tdataprodutos[".geocodingEnabled"] = false;










$tdataprodutos[".pageSize"] = 20;

$tdataprodutos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprodutos[".strOrderBy"] = $tstrOrderBy;

$tdataprodutos[".orderindexes"] = array();

$tdataprodutos[".sqlHead"] = "SELECT ID,  	Nome,  	Unidade,  	Quantidade,  	Fornecedor";
$tdataprodutos[".sqlFrom"] = "FROM produtos";
$tdataprodutos[".sqlWhereExpr"] = "";
$tdataprodutos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprodutos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprodutos[".arrGroupsPerPage"] = $arrGPP;

$tdataprodutos[".highlightSearchResults"] = true;

$tableKeysprodutos = array();
$tableKeysprodutos[] = "ID";
$tdataprodutos[".Keys"] = $tableKeysprodutos;


$tdataprodutos[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprodutos["ID"] = $fdata;
		$tdataprodutos[".searchableFields"][] = "ID";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","Nome");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprodutos["Nome"] = $fdata;
		$tdataprodutos[".searchableFields"][] = "Nome";
//	Unidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Unidade";
	$fdata["GoodName"] = "Unidade";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","Unidade");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Unidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Unidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprodutos["Unidade"] = $fdata;
		$tdataprodutos[".searchableFields"][] = "Unidade";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","Quantidade");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "Quantidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprodutos["Quantidade"] = $fdata;
		$tdataprodutos[".searchableFields"][] = "Quantidade";
//	Fornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Fornecedor";
	$fdata["GoodName"] = "Fornecedor";
	$fdata["ownerTable"] = "produtos";
	$fdata["Label"] = GetFieldLabel("produtos","Fornecedor");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Fornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fornecedor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataprodutos["Fornecedor"] = $fdata;
		$tdataprodutos[".searchableFields"][] = "Fornecedor";


$tables_data["produtos"]=&$tdataprodutos;
$field_labels["produtos"] = &$fieldLabelsprodutos;
$fieldToolTips["produtos"] = &$fieldToolTipsprodutos;
$placeHolders["produtos"] = &$placeHoldersprodutos;
$page_titles["produtos"] = &$pageTitlesprodutos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["produtos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["produtos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_produtos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Nome,  	Unidade,  	Quantidade,  	Fornecedor";
$proto0["m_strFrom"] = "FROM produtos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "produtos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "produtos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Unidade",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto10["m_sql"] = "Unidade";
$proto10["m_srcTableName"] = "produtos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto12["m_sql"] = "Quantidade";
$proto12["m_srcTableName"] = "produtos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Fornecedor",
	"m_strTable" => "produtos",
	"m_srcTableName" => "produtos"
));

$proto14["m_sql"] = "Fornecedor";
$proto14["m_srcTableName"] = "produtos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "produtos";
$proto17["m_srcTableName"] = "produtos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "Nome";
$proto17["m_columns"][] = "Unidade";
$proto17["m_columns"][] = "Quantidade";
$proto17["m_columns"][] = "Fornecedor";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "produtos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "produtos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="produtos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_produtos = createSqlQuery_produtos();


	
					
;

					

$tdataprodutos[".sqlquery"] = $queryData_produtos;

$tableEvents["produtos"] = new eventsBase;
$tdataprodutos[".hasEvents"] = false;

?>