create database mycloudplayer;

create table asmcp_1001_usersid(
	id_1001 varchar(255) not null primary key, -- contoh format: MCP$ID#[3_unique_random_char_not_numberand_special][counter_number][4_unique_random_only_number] => MCP$ID#aPt0000000000000015490
	id int not null foreign key,
	nama varchar(255) null,
	tgl_lahir date null,
	tlp varchar(20) not null,
	pin varchar(6) not null,
    photo text null
);

create table asmcp_1002_userdir(
	id_1002 varchar(255) not null primary key, -- contoh format: MCP$ROOTDIR#[USERID_2_without_abjad_and_zeros][2_random_number][USERID_1]@'[7_Char_Unique_Random_ID]' => MCP$ROOTDIR#'15490581@Av7%y$Q'
	id_1001 varchar(255) not null foreign key,
	rootdir varchar(255) not null foreign key, -- contoh format:
);

create table asmcp_1003_usersecurity(
	id_1003 varchar(255) not null primary key, -- contoh format: MCPS$ID#[USERID2] => MCPS$ID#aPt0000000000000015490
	id_1001 varchar(255) not null foreign key,
	device1 text null,
	device_type1 enum('pc','mobile','other') null,
	device_os1 enum('windows','linux','macos') null,
	device2 text null,
	device_type2 enum('pc','mobile','other') null,
	device_os2 enum('windows','linux','macos') null,
);

create table asmcp_1004_userfolders(
	id_1004 varchar(255) not null primary key, -- contoh format: [USERID2]&FOLDER#[counter_number] => MCP$ID#aPt0000000000000015490&FOLDER#0000001
	id_1001 varchar(255),
	foldername text null,
	ket text null
);

create table asmcp_1005_userplaylists(
	id_1005 varchar(255) not null primary key, -- contoh format: [USERID2]&MF#[counter_number] => MCP$ID#aPt0000000000000015490&MF#0000000000001
	id_1001 varchar(255),
	playlist varchar(100) not null,
);

create table asmcp_1006_userfiles(
	id_1006 varchar(255) not null primary key, -- contoh format: [USERID2]&MF#[counter_number] => MCP$ID#aPt0000000000000015490&MF#0000000000001
	id_1001 varchar(255),
	filename text null,
	genre text null,
	artist text null,
	album text null,
	composer text null,
	publisher text null,
	ket text null,
	favorited int null -- jika 1 maka divaforitkan dan masuk ke playlist favorited yg sudah di defaultkan
	folder varchar(255), -- berisi id_1004
	playlist varchar(255) null, -- berisi id_1006
);

create table asmcp_1007_usersetting(
	id_1007 varchar(255) not null primary key, -- contoh format: MCPU$ID#[USERID2] => MCPUS$ID#aPt0000000000000015490
	id_1001 varchar(255) not null foreign key,
	theme enum('#000', '#fff'),
	text enum('#000', '#fff'),
	bar text null,
    wall_img text null,
    wall_heigth int null,
    wall_width int null,
    wall_size text null,
    wall_position text null,
    wall_repeat enum('repeat', 'repeat-x', 'repeat-y', 'no-repeat') null,
    wall_attachment enum('scroll', 'fixed') null,
);
