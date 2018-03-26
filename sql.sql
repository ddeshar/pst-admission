INSERT INTO `subjects` (`subject_id`, `subject_name`) VALUES
    (1, 'ภาษาไทย'),
    (2, 'คณิตศาสตร์'),
    (3, 'วิทยาศาสตร์'),
    (4, 'ฟิสิกส์'),
    (5, 'เคมี'),
    (6, 'ชีววิทยา'),
    (7, 'โลก ดาราศาสตร์และเทคโนโลยี'),
    (8, 'ศาสนาและวัฒนธรรม'),
    (9, 'พลศึกษา'),
    (10, 'ศิลปะ'),
    (11, 'การงานอาชีพและเทคโนโลยี'),
    (12, 'ภาษาต่างประเทศ');

INSERT INTO `parents_status` (`par_status_id`, `par_status_des`) VALUES
    (1, 'อยู่ด้ยกัน'),
    (2, 'แยกกันอยู่'),
    (3, 'หย่าร้าง'),
    (4, 'บิดาถึงแก่กรรม'),
    (5, 'มารดาถึงแก่กรรม');

INSERT INTO `pal_level` (`pali_l_id`, `pali_l_name`) VALUES
    (1, 'ยังไม่ได้ศึกษา'),
    (2, 'ป.ธ.1-2'),
    (3, 'ป.ธ.3'),
    (4, 'ป.ธ.4'),
    (5, 'ป.ธ.5'),
    (6, 'ป.ธ.6'),
    (7, 'ป.ธ.7'),
    (8, 'ป.ธ.8'),
    (9, 'ป.ธ.9');

INSERT INTO `occupations` (`occupation_id`, `occupation_name`) VALUES
    (1, 'การประมง‎'),
    (2, 'การส่งเสริมอาชีพ‎'),
    (3, 'นักเขียน‎'),
    (4, 'คอลัมนิสต์‎'),
    (5, 'จิตรกร'),
    (6, 'ตุลาการ‎'),
    (7, 'นักการธนาคาร‎'),
    (8, 'นักข่าว‎'),
    (9, 'นักเขียนบทภาพยนตร์‎'),
    (10, 'นักแต่งเพลง‎');

INSERT INTO `notice` (`notice_id`, `notice_name`) VALUES
    (1, 'facebook'),
    (2, 'email');

INSERT INTO `naktham_level` (`naktham_l_id`, `naktham_l_name`) VALUES
    (1, 'ยังไม่ได้ศึกษา'),
    (2, 'น.ธ.ตรี'),
    (3, 'น.ธ.โท'),
    (4, 'น.ธ.เอก');

INSERT INTO `class` (`class_id`, `class_name`) VALUES
    (1, 'ป.6'),
    (2, 'ม.1'),
    (3, 'ม.2'),
    (4, 'ม.3'),
    (5, 'ม.4'),
    (6, 'ม.5'),
    (7, 'ม.6');

CREATE VIEW `pst_admission`.`parentview` AS SELECT
	p.parent_id,
	p.parent_f_name,
	p.parent_f_income,
	p.parent_f_tel,
	f.occupation_name AS FOCC,
	p.parent_m_name,
	p.parent_m_income,
	p.parent_m_tel,
	s.par_status_des,
	m.occupation_name AS MOCC 
FROM
	parents AS p
	INNER JOIN parents_status AS s ON p.parents_status = s.par_status_id
	INNER JOIN occupations AS f ON p.parent_f_occupation = f.occupation_id
	INNER JOIN occupations AS m ON p.parent_m_occupation = m.occupation_id;

CREATE VIEW `pst_admission`.`parentview` AS SELECT
	g.guardian_id,
	g.guardian_name,
	g.guardian_income,
	g.guardian_tel,
	g.guardian_national_id,
	g.guardian_relation,
	o.occupation_name 
FROM
	guardians AS g
	INNER JOIN occupations AS o ON g.guardian_occupation = o.occupation_id

CREATE VIEW `pst_admission`.`parentview` AS SELECT
	e.education_id,
	c.class_name,
	s.school_name,
	s.school_tambol,
	s.school_district,
	s.school_provience 
FROM
	education AS e
	INNER JOIN school AS s ON e.education_school_id = s.school_id
	INNER JOIN class AS c ON e.education_grade = c.class_id

CREATE VIEW `pst_admission`.`paliview` AS SELECT
	P.pali_id,
	P.pali_year,
	S.school_name,
	S.school_tambol,
	S.school_district,
	S.school_provience,
	PL.pali_l_name 
FROM
	pali AS P
	INNER JOIN school AS S ON P.pali_school = S.school_id
	INNER JOIN pal_level AS PL ON P.pali_level = PL.pali_l_id

CREATE VIEW `pst_admission`.`nakthamview` AS SELECT
	N.naktham_id,
	N.naktham_year,
	NL.naktham_l_name,
	S.school_name,
	S.school_tambol,
	S.school_district,
	S.school_provience 
FROM
	naktham AS N
	INNER JOIN school AS S ON N.naktham_school = S.school_id
	INNER JOIN naktham_level AS NL ON N.naktham_level = NL.naktham_l_id

CREATE VIEW `pst_admission`.`newstu_view` AS SELECT
    N.newstu_id,
    N.newstu_titlename,
    N.newstu_name,
    N.newstu_lastname,
    N.newstu_chaya,
    N.newstu_petname,
    N.newstu_dob,
    N.newstu_bgroup,
    N.newstu_weight,
    N.newstu_height,
    N.newstu_nationalid,
    N.newstu_houseno,
    N.newstu_photo,
    N.created_at,
    A.address_no,
    A.address_moo,
    A.address_house,
    A.address_tambol,
    A.address_district,
    A.address_provience,
    A.address_zip,
    A.address_tel,
    E.evi_1,
    E.evi_2,
    E.evi_3,
    E.evi_4,
    E.evi_5,
    E.evi_6,
    E.evi_7,
    E.evi_8,
    E.evi_9,
    E.evi_10,
    E.evi_11,
    E.evi_12,
    S.sibling_total,
    S.sibling_o_bro,
    S.sibling_l_bro,
    S.sibling_o_sis,
    S.sibling_l_sis,
    S.newstut_status,
    W.wat_name,
    W.wat_tambol,
    W.wat_district,
    W.wat_provience,
    W.wat_postal,
    W.wat_abbot,
    W.wat_tel,
    t.firstname AS typer_firstname,
    t.lastname AS typer_lastname,
    U.firstname AS stu_b_fname,
    U.lastname AS stu_b_lname,
    C.class_name,
    P.parent_f_name,
    P.parent_f_income,
    P.parent_f_tel,
    P.FOCC,
    P.parent_m_name,
    P.parent_m_income,
    P.parent_m_tel,
    P.par_status_des,
    P.MOCC,
    PA.pali_year,
    PA.school_name AS pa_sco_name,
    PA.school_tambol AS pa_tambol,
    PA.school_district AS pa_district,
    PA.school_provience AS pa_provience,
    PA.pali_l_name,
    NA.naktham_year,
    NA.naktham_l_name,
    NA.school_name AS na_sco_name,
    NA.school_tambol AS na_tambol,
    NA.school_district AS na_district,
    NA.school_provience AS na_provience,
    G.guardian_name,
    G.guardian_income,
    G.guardian_tel,
    G.guardian_national_id,
    G.guardian_relation,
    G.occupation_name,
    ED.class_name AS edu_class,
    ED.school_name AS edu_sco_name,
    ED.school_tambol AS edu_tambol,
    ED.school_district AS edu_district,
    ED.school_provience AS edu_provience,
    B.subject_name AS best_sub,
    WO.subject_name AS worst_sub
FROM
    newstudent AS N
    LEFT JOIN address AS A ON N.newstu_address_id = A.address_id
    LEFT JOIN eviedence AS E ON N.newstu_evi_id = E.evi_id
    LEFT JOIN siblings AS S ON N.newstu_sibling_id = S.sibling_id
    LEFT JOIN wats AS W ON N.newstu_wat_id = W.wat_id
    LEFT JOIN users AS t ON N.typer = t.user_id
    LEFT JOIN users AS U ON N.newstu_user_id = U.user_id
    LEFT JOIN class AS C ON N.newstu_admit_class = C.class_id
    LEFT JOIN parentview AS P ON N.newstu_parents_id = P.parent_id
    LEFT JOIN paliview AS PA ON N.newstu_pali_id = PA.pali_id
    LEFT JOIN nakthamview AS NA ON N.newstu_naktham_id = NA.naktham_id
    LEFT JOIN guardianview AS G ON N.newstu_guardian_id = G.guardian_id
    LEFT JOIN edudationview AS ED ON N.newstu_education_id = ED.education_id
    LEFT JOIN subjects AS B ON N.newstu_best_sub = B.subject_id 
    LEFT JOIN subjects AS WO ON N.newstu_worst_sub = WO.subject_id


