<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IposAppConfigTableSeeder extends Seeder
{
	public function run()
{
		$rows = [	
			[
				'key' => 'address',
				'value' => 'The Capital Hub, Suit 02 Banex/Gwarinpa Express way, Mabushi Abuja',

			],

			[
				'key' => 'barcode_content',
				'value' => 'id',

			],

			[
				'key' => 'barcode_first_row',
				'value' => 'category',

			],

			[
				'key' => 'barcode_font',
				'value' => 'Arial',

			],

			[
				'key' => 'barcode_font_size',
				'value' => '10',

			],

			[
				'key' => 'barcode_generate_if_empty',
				'value' => '0',

			],

			[
				'key' => 'barcode_height',
				'value' => '50',

			],

			[
				'key' => 'barcode_num_in_row',
				'value' => '2',

			],

			[
				'key' => 'barcode_page_cellspacing',
				'value' => '20',

			],

			[
				'key' => 'barcode_page_width',
				'value' => '100',

			],

			[
				'key' => 'barcode_quality',
				'value' => '100',

			],

			[
				'key' => 'barcode_second_row',
				'value' => 'item_code',

			],

			[
				'key' => 'barcode_third_row',
				'value' => 'unit_price',

			],

			[
				'key' => 'barcode_type',
				'value' => 'Code39',

			],

			[
				'key' => 'barcode_width',
				'value' => '250',

			],

			[
				'key' => 'cash_decimals',
				'value' => '2',

			],

			[
				'key' => 'cash_rounding_code',
				'value' => '0',

			],

			[
				'key' => 'client_id',
				'value' => '30a472d3-eae1-4a5b-b8d3-00b06ac30d16',

			],

			[
				'key' => 'company',
				'value' => 'Tonia Pharmacy & Superstores',

			],

			[
				'key' => 'company_logo',
				'value' => 'company_logo4.jpg',

			],

			[
				'key' => 'country_codes',
				'value' => 'ng',

			],

			[
				'key' => 'currency_decimals',
				'value' => '2',

			],

			[
				'key' => 'currency_symbol',
				'value' => '₦',

			],

			[
				'key' => 'custom10_name',
				'value' => '',

			],

			[
				'key' => 'custom1_name',
				'value' => '',

			],

			[
				'key' => 'custom2_name',
				'value' => '',

			],

			[
				'key' => 'custom3_name',
				'value' => '',

			],

			[
				'key' => 'custom4_name',
				'value' => '',

			],

			[
				'key' => 'custom5_name',
				'value' => '',

			],

			[
				'key' => 'custom6_name',
				'value' => '',

			],

			[
				'key' => 'custom7_name',
				'value' => '',

			],

			[
				'key' => 'custom8_name',
				'value' => '',

			],

			[
				'key' => 'custom9_name',
				'value' => '',

			],

			[
				'key' => 'customer_reward_enable',
				'value' => '',

			],

			[
				'key' => 'customer_sales_tax_support',
				'value' => '0',

			],

			[
				'key' => 'dateformat',
				'value' => 'm/d/Y',

			],

			[
				'key' => 'date_or_time_format',
				'value' => '',

			],

			[
				'key' => 'default_origin_tax_code',
				'value' => '',

			],

			[
				'key' => 'default_register_mode',
				'value' => 'sale',

			],

			[
				'key' => 'default_sales_discount',
				'value' => '0',

			],

			[
				'key' => 'default_tax_1_name',
				'value' => '',

			],

			[
				'key' => 'default_tax_1_rate',
				'value' => '',

			],

			[
				'key' => 'default_tax_2_name',
				'value' => '',

			],

			[
				'key' => 'default_tax_2_rate',
				'value' => '',

			],

			[
				'key' => 'default_tax_category',
				'value' => 'Standard',

			],

			[
				'key' => 'default_tax_rate',
				'value' => '8',

			],

			[
				'key' => 'email',
				'value' => '',

			],

			[
				'key' => 'fax',
				'value' => '',

			],

			[
				'key' => 'financial_year',
				'value' => '1',

			],

			[
				'key' => 'giftcard_number',
				'value' => 'series',

			],

			[
				'key' => 'invoice_default_comments',
				'value' => 'This is a default comment',

			],

			[
				'key' => 'invoice_email_message',
				'value' => 'Dear $CU, In attachment the receipt for sale $INV',

			],

			[
				'key' => 'invoice_enable',
				'value' => '1',

			],

			[
				'key' => 'laboratory_logo',
				'value' => 'company_logo3.png',

			],

			[
				'key' => 'language',
				'value' => 'english',

			],

			[
				'key' => 'language_code',
				'value' => 'en',

			],

			[
				'key' => 'last_used_invoice_number',
				'value' => '0',

			],

			[
				'key' => 'last_used_quote_number',
				'value' => '0',

			],

			[
				'key' => 'lines_per_page',
				'value' => '25',

			],

			[
				'key' => 'line_sequence',
				'value' => '0',

			],

			[
				'key' => 'mailpath',
				'value' => '/usr/sbin/sendmail',

			],

			[
				'key' => 'msg_msg',
				'value' => '',

			],

			[
				'key' => 'msg_pwd',
				'value' => '',

			],

			[
				'key' => 'msg_src',
				'value' => '',

			],

			[
				'key' => 'msg_uid',
				'value' => '',

			],

			[
				'key' => 'notify_horizontal_position',
				'value' => 'center',

			],

			[
				'key' => 'notify_vertical_position',
				'value' => 'bottom',

			],

			[
				'key' => 'number_locale',
				'value' => 'en_NG',

			],

			[
				'key' => 'payment_options_order',
				'value' => 'cashdebitcredit',

			],

			[
				'key' => 'phone',
				'value' => '09097486557',

			],

			[
				'key' => 'print_bottom_margin',
				'value' => '0',

			],

			[
				'key' => 'print_footer',
				'value' => '0',

			],

			[
				'key' => 'print_header',
				'value' => '0',

			],

			[
				'key' => 'print_left_margin',
				'value' => '0',

			],

			[
				'key' => 'print_right_margin',
				'value' => '0',

			],

			[
				'key' => 'print_silently',
				'value' => '1',

			],

			[
				'key' => 'print_top_margin',
				'value' => '0',

			],

			[
				'key' => 'protocol',
				'value' => 'mail',

			],

			[
				'key' => 'quantity_decimals',
				'value' => '0',

			],

			[
				'key' => 'receipt_show_company_name',
				'value' => '1',

			],

			[
				'key' => 'receipt_show_description',
				'value' => '1',

			],

			[
				'key' => 'receipt_show_serialnumber',
				'value' => '1',

			],

			[
				'key' => 'receipt_show_taxes',
				'value' => '0',

			],

			[
				'key' => 'receipt_show_total_discount',
				'value' => '1',

			],

			[
				'key' => 'receipt_template',
				'value' => 'receipt_default',

			],

			[
				'key' => 'receiving_calculate_average_price',
				'value' => '0',

			],

			[
				'key' => 'recv_invoice_format',
				'value' => '$CO',

			],

			[
				'key' => 'return_policy',
				'value' => 'Laboratory',

			],

			[
				'key' => 'sales_invoice_format',
				'value' => '$CO',

			],

			[
				'key' => 'sales_quote_format',
				'value' => 'Q%y{QSEQ:6}',

			],

			[
				'key' => 'smtp_crypto',
				'value' => 'ssl',

			],

			[
				'key' => 'smtp_port',
				'value' => '465',

			],

			[
				'key' => 'smtp_timeout',
				'value' => '5',

			],

			[
				'key' => 'statistics',
				'value' => '1',

			],

			[
				'key' => 'tax_decimals',
				'value' => '2',

			],

			[
				'key' => 'tax_included',
				'value' => '0',

			],

			[
				'key' => 'theme',
				'value' => 'flatly',

			],

			[
				'key' => 'thousands_separator',
				'value' => 'thousands_separator',

			],

			[
				'key' => 'timeformat',
				'value' => 'H:i:s',

			],

			[
				'key' => 'timezone',
				'value' => 'Africa/Algiers',

			],

			[
				'key' => 'vat',
				'value' => '5',

			],

			[
				'key' => 'website',
				'value' => '',

			],

		];
		foreach ($rows as $row) {
			DB::table('IposAppConfig')->insert($row);
		}
	}
}