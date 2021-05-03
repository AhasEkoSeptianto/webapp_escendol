// db 

// data except d
var data_day = [
		{'day':'senin', 'product_sold' : 21, 'payment':30000 },
		{'day':'selasa', 'product_sold' : 22, 'payment':60000 },
		{'day':'rabu', 'product_sold' : 5, 'payment':120000 },
		{'day':'kamis', 'product_sold' : 17, 'payment':640000 },
		{'day':'jumat', 'product_sold' : 2, 'payment':80000 },
		{'day':'sabtu', 'product_sold' : 91, 'payment':60000 },
		{'day':'minggu', 'product_sold' : 16, 'payment':10000 },
]

var data_month = [
		{'month':'jan', 'product_sold' : 21, 'payment':30000 },
		{'month':'feb', 'product_sold' : 22, 'payment':60000 },
		{'month':'mar', 'product_sold' : 5, 'payment':120000 },
		{'month':'apr', 'product_sold' : 17, 'payment':640000 },
		{'month':'mei', 'product_sold' : 2, 'payment':80000 },
		{'month':'jun', 'product_sold' : 91, 'payment':60000 },
		{'month':'jul', 'product_sold' : 16, 'payment':10000 },
		{'month':'agu', 'product_sold' : 31, 'payment':20000 },
		{'month':'sep', 'product_sold' : 43, 'payment':70000 },
		{'month':'okt', 'product_sold' : 34, 'payment':640000 },
		{'month':'nov', 'product_sold' : 61, 'payment':170000 },
		{'month':'des', 'product_sold' : 17, 'payment':220000 },
]

var data_years = [
		{'years':'2017', 'product_sold' : 31, 'payment':20000 },
		{'years':'2018', 'product_sold' : 43, 'payment':70000 },
		{'years':'2019', 'product_sold' : 34, 'payment':640000 },
		{'years':'2020', 'product_sold' : 61, 'payment':170000 },
		{'years':'2021', 'product_sold' : 17, 'payment':220000 },
]


var dataProductSold_day = [
	{
		'day' : 'senin',
		'product_type' : {
			'recomend': {
				'product_sold' : 14,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 25,
				'payment' : 55,
			},
			'normal' : {
				'product_sold' : 11,
				'payment' : 34,
			},
			'material' : {
				'product_sold' : 27,
				'payment' : 77,
			},
		},
	},
	{
		'day' : 'selasa',
		'product_type' : {
			'recomend': {
				'product_sold' : 21,
				'payment' : 23,
			},
			'special' : {
				'product_sold' : 35,
				'payment' : 15,
			},
			'normal' : {
				'product_sold' : 21,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 4,
			},
		},
	},
	{
		'day' : 'rabu',
		'product_type' : {
			'recomend': {
				'product_sold' : 32,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 3,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 13,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 12,
			},
		},
	},
	{
		'day' : 'kamis',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 21,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 2,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 2,
			},
		},
	},
	{
		'day' : 'jumat',
		'product_type' : {
			'recomend': {
				'product_sold' : 31,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 51,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 61,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 11,
			},
		},
	},
	{
		'day' : 'sabtu',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 21,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 22,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'day' : 'minggu',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 61,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 3,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 53,
				'payment' : 7,
			},
		},
	},
]



var dataProductSold_month = [
	{
		'month' : 'jan',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'feb',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'mart',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'apr',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'mei',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'jun',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'jul',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'agu',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'sep',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'nov',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
	{
		'month' : 'des',
		'product_type' : {
			'recomend': {
				'product_sold' : 11,
				'payment' : 11,
			},
			'special' : {
				'product_sold' : 5,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 31,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
]



var dataProductSold_year = [
	{
		'year' : '2018',
		'product_type' : {
			'recomend': {
				'product_sold' : 36,
				'payment' : 1,
			},
			'special' : {
				'product_sold' : 88,
				'payment' : 33,
			},
			'normal' : {
				'product_sold' : 11,
				'payment' : 21,
			},
			'material' : {
				'product_sold' : 32,
				'payment' : 3,
			},
		},
	},
	{
		'year' : '2019',
		'product_type' : {
			'recomend': {
				'product_sold' : 15,
				'payment' : 44,
			},
			'special' : {
				'product_sold' : 12,
				'payment' : 5,
			},
			'normal' : {
				'product_sold' : 33,
				'payment' : 21,
			},
			'material' : {
				'product_sold' : 29,
				'payment' : 15,
			},
		},
	},
	{
		'year' : '2020',
		'product_type' : {
			'recomend': {
				'product_sold' : 63,
				'payment' : 51,
			},
			'special' : {
				'product_sold' : 21,
				'payment' : 31,
			},
			'normal' : {
				'product_sold' : 1,
				'payment' : 15,
			},
			'material' : {
				'product_sold' : 51,
				'payment' : 7,
			},
		},
	},
	{
		'year' : '2021',
		'product_type' : {
			'recomend': {
				'product_sold' : 31,
				'payment' : 31,
			},
			'special' : {
				'product_sold' : 22,
				'payment' : 51,
			},
			'normal' : {
				'product_sold' : 88,
				'payment' : 31,
			},
			'material' : {
				'product_sold' : 7,
				'payment' : 7,
			},
		},
	},
]