<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'u587940520_garyl';
         $dbpass = '!@#123qweasdZXC';
         $dbname = 'u587940520_garyl';
       
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
         printf('Connected successfully.<br />');
      
          $sql = "CREATE TABLE myttab( 
            DATE_and_Price TEXT, ASXCBA TEXT, ASXBHP TEXT, ASXCSL TEXT, ASXWBC TEXT, ASXNAB TEXT, ASXANZ TEXT, ASXFMG TEXT, ASXWES TEXT, ASXMQG TEXT, ASXWOW TEXT, ASXRIO TEXT, ASXTLS TEXT, ASXTCL TEXT, ASXAPT TEXT, ASXGMG TEXT, ASXALL TEXT, ASXNCM TEXT, ASXWPL TEXT,
ASXXRO TEXT, ASXCOL TEXT, ASXREA TEXT, ASXJHX TEXT, ASXFPH TEXT, ASXSHL TEXT, ASXSYD TEXT, ASXRHC TEXT, ASXBXB TEXT, ASXCOH TEXT, ASXSTO TEXT, ASXMGOC TEXT, ASXSCG TEXT, ASXASX TEXT, ASXQBE TEXT, ASXS32 TEXT, ASXNST TEXT, ASXREH TEXT, ASXSUN TEXT, ASXAMC
TEXT, ASXAPA TEXT, ASXIAG TEXT, ASXSEK TEXT, ASXSGP TEXT, ASXDXS TEXT, ASXBSL TEXT, ASXTAH TEXT, ASXTPG TEXT, ASXAIA TEXT, ASXMGR TEXT, ASXWTC TEXT, ASXRMD TEXT, ASXQAN TEXT, ASXDMP TEXT, ASXAFI TEXT, ASXGPT TEXT, ASXMFG TEXT, ASXLLC TEXT, ASXMCY TEXT,
ASXMIN TEXT, ASXEVN TEXT, ASXCWN TEXT, ASXSVW TEXT, ASXOZL TEXT, ASXCPU TEXT, ASXVAS TEXT, ASXMPL TEXT, ASXOSH TEXT, ASXSPK TEXT, ASXSOL TEXT, ASXBLD TEXT, ASXTWE TEXT, ASXVCX TEXT, ASXAST TEXT, ASXHVN TEXT, ASXORG TEXT, ASXAZJ TEXT, ASXMEZ TEXT, ASXIEL
TEXT, ASXCHC TEXT, ASXARG TEXT, ASXALD TEXT, ASXJBH TEXT, ASXALX TEXT, ASXBOQ TEXT, ASXQUB TEXT, ASXBEN TEXT, ASXA2M TEXT, ASXORI TEXT, ASXFBU TEXT, ASXAGL TEXT, ASXCIM TEXT, ASXNXT TEXT, ASXWOR TEXT, ASXCWY TEXT, ASXIGO TEXT, ASXIPL TEXT, ASXNEC TEXT,
ASXANN TEXT, ASXPME TEXT, ASXCAR TEXT, ASXAWC TEXT, ASXALQ TEXT, ASXZ1P TEXT, ASXLYC TEXT, ASXIFT TEXT, ASXSTW TEXT, ASXEBO TEXT, ASXIOZ TEXT, ASXAPE TEXT, ASXPMV TEXT, ASXIVV TEXT, ASXMTS TEXT, ASXAMP TEXT, ASXRWC TEXT, ASXBRG TEXT, ASXBPT TEXT, ASXSKI
TEXT, ASXALU TEXT, ASXDOW TEXT, ASXSDF TEXT, ASXFLT TEXT, ASXSGR TEXT, ASXNWL TEXT, ASXCGF TEXT, ASXCIA TEXT, ASXSAS TEXT, ASXVOC TEXT, ASXCDA TEXT, ASXGNE TEXT, ASXMLT TEXT, ASXPLS TEXT, ASXSGM TEXT, ASXNIC TEXT, ASXTNE TEXT, ASXBKW TEXT, ASXILU TEXT,
ASXARB TEXT, ASXVUK TEXT, ASXVGS TEXT, ASXYAL TEXT, ASXCSR TEXT, ASXVEA TEXT, ASXMGF TEXT, ASXSUL TEXT, ASXDHG TEXT, ASXLNK TEXT, ASXORA TEXT, ASXCLW TEXT, ASXBAP TEXT, ASXCTD TEXT, ASXTLT TEXT, ASXPTM TEXT, ASXCNU TEXT, ASXGOZ TEXT, ASXSCP TEXT, ASXZIM
TEXT, ASXBWP TEXT, ASXLFS TEXT, ASXHLS TEXT, ASXSNZ TEXT, ASXNHF TEXT, ASXPDL TEXT, ASXVTS TEXT, ASXABP TEXT, ASXSKC TEXT, ASXPBH TEXT, ASXDRR TEXT, ASXCMW TEXT, ASXCHN TEXT, ASXLFG TEXT, ASXSLK TEXT, ASXIFL TEXT, ASXABC TEXT, ASXCQR TEXT, ASXIOO TEXT,
ASXNSR TEXT, ASXORE TEXT, ASXBIN TEXT, ASXPNV TEXT, ASXCCP TEXT, ASXEML TEXT, ASXEVT TEXT, ASXNUF TEXT, ASXWEB TEXT, ASXVEU TEXT, ASXWAM TEXT, ASXMP1 TEXT, ASXRRL TEXT, ASXTYR TEXT, ASXELD TEXT, ASXWPR TEXT, ASXBGA TEXT, ASXIRE TEXT, ASXNAN TEXT, ASXPPT
TEXT, ASXCIP TEXT, ASXPPH TEXT, ASXCGC TEXT, ASXPNI TEXT, ASXDDR TEXT, ASXAPX TEXT, ASXGXY TEXT, ASXAIZ TEXT, ASXUWL TEXT, ASXINA TEXT, ASXHUB TEXT, ASXDEG TEXT, ASXVHY TEXT, ASXIAF TEXT, ASXCNI TEXT, ASXCEN TEXT, ASXLOV TEXT, ASXIVC TEXT, ASXHTA TEXT,
ASXAVN TEXT, ASXPRU TEXT, ASXSLR TEXT, ASXIPH TEXT, ASXBKL TEXT, ASXMFF TEXT, ASXSBM TEXT, ASXCUV TEXT, ASXMVW TEXT, ASXAUB TEXT, ASXRMS TEXT, ASXLIC TEXT, ASXMSB TEXT, ASXAX1 TEXT, ASXWHC TEXT, ASXHMC TEXT, ASXNXL TEXT, ASXLSF TEXT, ASXKGN TEXT, ASXPLL
TEXT, ASXCKF TEXT, ASXMXT TEXT, ASXJHG TEXT, ASXFCL TEXT, ASXPGH TEXT, ASXZEL TEXT, ASXNWS TEXT, ASXWLE TEXT, ASXING TEXT, ASXUMG TEXT, ASXA200 TEXT, ASXGUD TEXT, ASXOCL TEXT, ASXISX TEXT, ASXAUI TEXT, ASXRBL TEXT, ASXGOR TEXT, ASXGNC TEXT, ASXCQE TEXT,
ASXDBI TEXT, ASXMND TEXT, ASXTPW TEXT, ASXTLX TEXT, ASXURW TEXT, ASXHSN TEXT, ASXGMA TEXT, ASXSFR TEXT, ASXRBD TEXT, ASXBKI TEXT, ASXMAQ TEXT, ASXARF TEXT, ASXCOF TEXT, ASXMGX TEXT, ASXPSI TEXT, ASXOML TEXT, ASXOBL TEXT, ASXCCX TEXT, ASXNEA TEXT, ASXDUI
TEXT, ASXWGX TEXT, ASXPDN TEXT, ASXNHC TEXT, ASXHGH TEXT, ASXBRN TEXT, ASXHM1 TEXT, ASXSIQ TEXT, ASXLEP TEXT, ASXIDX TEXT, ASXIEM TEXT, ASXMGH TEXT, ASXCRN TEXT, ASXDTL TEXT, ASXBET TEXT, ASXNWH TEXT, ASXKMD TEXT, ASXVG1 TEXT, ASXIMU TEXT, ASXSZL TEXT,
ASXBGP TEXT, ASXWAF TEXT, ASXASB TEXT, ASXNCK TEXT, ASXAEF TEXT, ASXJLG TEXT, ASXMMS TEXT, ASXJIN TEXT, ASXOCA TEXT, ASXMHH TEXT, ASXBGL TEXT, ASXIXJ TEXT, ASXNVX TEXT, ASXIAA TEXT, ASXRMC TEXT, ASXGEM TEXT, ASXNBI TEXT, ASXSGF TEXT, ASXADH TEXT, ASXIAP
TEXT, ASXTGR TEXT, ASXBBN TEXT, ASXRFF TEXT, ASXGWA TEXT, ASXKKC TEXT, ASXMOE TEXT, ASXERA TEXT, ASX360 TEXT, ASXMICH TEXT, ASXEOS TEXT, ASXABR TEXT, ASXSWM TEXT, ASXCIN TEXT, ASXAHY TEXT, ASXVUL TEXT, ASXLTR TEXT, ASXOPH TEXT, ASXMYX TEXT, ASXPRN TEXT,
ASXAFG TEXT, ASXSFY TEXT, ASXSHV TEXT, ASXAKP TEXT, ASXSIG TEXT, ASXOMH TEXT, ASXAAC TEXT, ASXIMD TEXT, ASXSPL TEXT, ASXBWX TEXT, ASXWSA TEXT, ASXAQZ TEXT, ASXMMM TEXT, ASXREG TEXT, ASXIEU TEXT, ASXSKO TEXT, ASXGRR TEXT, ASXSM1 TEXT, ASXECX TEXT, ASXCTT
TEXT, ASXINR TEXT, ASXADI TEXT, ASXAPI TEXT, ASXMNY TEXT, ASXDJW TEXT, ASXKAR TEXT, ASXASM TEXT, ASXADO TEXT, ASXBVS TEXT, ASXJMS TEXT, ASXPWH TEXT, ASXEHE TEXT, ASXHDN TEXT, ASXAD8 TEXT, ASXCMM TEXT, ASXSLF TEXT, ASXBFG TEXT, ASXPAR TEXT, ASXPPC TEXT,
ASXDUB TEXT, ASXFGG TEXT, ASXNTO TEXT, ASXIFM TEXT, ASXGDI TEXT, ASXPWG TEXT, ASXABB TEXT, ASXVIF TEXT, ASXCWP TEXT, ASXSXY TEXT, ASXSTX TEXT, ASXPPK TEXT, ASXRSG TEXT, ASXWPP TEXT, ASXWGB TEXT, ASXAMI TEXT, ASXSYR TEXT, ASXWHF TEXT, ASXXARO TEXT, ASXPYC
TEXT, ASXVGE TEXT, ASXHPI TEXT, ASXRDC TEXT, ASXAVZ TEXT, ASXMIR TEXT, ASXAGG TEXT, ASXVSO TEXT, ASXAPL TEXT, ASXHT1 TEXT, ASXSXL TEXT, ASXVG8 TEXT, ASXUNI TEXT, ASXVACF TEXT, ASXPGG TEXT, ASXART TEXT, ASXALG TEXT, ASXEQT TEXT, ASXOPT TEXT, ASXVGI TEXT,
ASXFGX TEXT, ASXRF1 TEXT, ASXPL8 TEXT, ASXVGL TEXT, ASXVRT TEXT, ASXELO TEXT, ASXADN TEXT, ASXMVA TEXT, ASXEHL TEXT, ASXMNF TEXT, ASXFDV TEXT, ASXHUM TEXT, ASXASG TEXT, ASXPGF TEXT, ASXRED TEXT, ASXFSF TEXT, ASXALK TEXT, ASXRAC TEXT, ASXPSQ TEXT, ASXABY
TEXT, ASX3DP TEXT, ASXCOE TEXT, ASXPAI TEXT, ASXPMC TEXT, ASXEMR TEXT, ASXPIC TEXT, ASXAMA TEXT, ASXIRI TEXT, ASXAQR TEXT, ASXBTH TEXT, ASXMAH TEXT, ASXERD TEXT, ASXMVP TEXT, ASXSSM TEXT, ASXMYS TEXT, ASXQRI TEXT, ASXPCI TEXT, ASXMCR TEXT, ASXGCI TEXT,
ASXCAT TEXT, ASXCVN TEXT, ASXADT TEXT, ASXWMI TEXT, ASXTLG TEXT, ASXIVE TEXT, ASXWGN TEXT, ASXSGLLV TEXT, ASXBLX TEXT, ASXPPE TEXT, ASXLGL TEXT, ASXPPS TEXT, ASXAOF TEXT, ASXFLN TEXT, ASXGDX TEXT, ASXSSR TEXT, ASXAFP TEXT, ASXSLC TEXT, ASXIJP TEXT, ASXWSP
TEXT, ASXJRV TEXT, ASXA4N TEXT, ASXUOS TEXT, ASXCAJ TEXT, ASXEOF TEXT, ASXSPT TEXT, ASXRIC TEXT, ASXDDH TEXT, ASXALC TEXT, ASXCXL TEXT, ASXAVH TEXT, ASXMLD TEXT, ASXMOT TEXT, ASXMFB TEXT, ASXMAU TEXT, ASXARX TEXT, ASXMVF TEXT, ASXTWR TEXT, ASXVAE TEXT,
ASXMHG TEXT, ASXALI TEXT, ASX4DX TEXT, ASXDCN TEXT, ASXCVW TEXT, ASXVHT TEXT, ASXCDM TEXT, ASXLEG TEXT, ASXAMH TEXT, ASXBSE TEXT, ASXBKG TEXT, ASXVBND TEXT, ASXEXR TEXT, ASXNGI TEXT, ASXHAS TEXT, ASXSRV TEXT, ASXSO4 TEXT, ASXSDG TEXT, ASXCBR TEXT, ASXWAX
TEXT, ASXPAN TEXT, ASXEZL TEXT, ASXLKE TEXT, ASXPFP TEXT, ASXMHJ TEXT, ASXPIA TEXT, ASXPNR TEXT, ASXHLO TEXT, ASXBOE TEXT, ASXRUL TEXT, ASXCDP TEXT, ASXCLV TEXT, ASXKGL TEXT, ASXE25 TEXT, ASXFUEL TEXT, ASXCXO TEXT, ASXTUA TEXT, ASXIJR TEXT, ASXM7T TEXT,
ASXHPG TEXT, ASXMNS TEXT, ASXSST TEXT, ASXKSL TEXT, ASXPAC TEXT, ASXIHL TEXT, ASXTGG TEXT, ASXIMM TEXT, ASXOFX TEXT, ASXSKT TEXT, ASXSFC TEXT, ASXNXS TEXT, ASXRHP TEXT, ASXPE1 TEXT, ASXABA TEXT, ASXNEW TEXT, ASXHUO TEXT, ASXRTR TEXT, ASXTBR TEXT, ASXBBOZ
TEXT, ASXCDD TEXT, ASXOTW TEXT, ASXBUB TEXT, ASXWQG TEXT, ASXEGR TEXT, ASXNMT TEXT, ASXEGG TEXT, ASXMAI TEXT, ASXSNL TEXT, ASXGDF TEXT, ASXSVL TEXT, ASXFFX TEXT, ASXWBT TEXT, ASXTRS TEXT, ASXDW8 TEXT, ASXDGO TEXT, ASXMME TEXT, ASXMYR TEXT, ASXAGI TEXT,
ASXSVH TEXT, ASX88E TEXT, ASX4DS TEXT, ASXNVA TEXT, ASXFWD TEXT, ASXVML TEXT, ASXBD1 TEXT, ASXAHI TEXT, ASXCVC TEXT, ASXSVM TEXT, ASXTRA TEXT, ASXQVE TEXT, ASXOOO TEXT, ASXBCK TEXT, ASXWZR TEXT, ASXMOC TEXT, ASXCYC TEXT, ASXANO TEXT, ASXGLL TEXT, ASXCTM
TEXT, ASXMCA TEXT, ASXST1 TEXT, ASXFRI TEXT, ASXOIL TEXT, ASXHFR TEXT, ASXHE8 TEXT, ASXNCZ TEXT, ASXIMR TEXT, ASXTNT TEXT, ASXAMS TEXT, ASXRHY TEXT, ASXVTH TEXT, ASXVVA TEXT, ASXMYD TEXT, ASXFEMX TEXT, ASXCYL TEXT, ASXECF TEXT, ASXAIS TEXT, ASXLYL TEXT,
ASXGSS TEXT, ASXAVJ TEXT, ASXEMV TEXT, ASXIOU TEXT, ASXDSK TEXT, ASXNZK TEXT, ASXJHC TEXT, ASXWOT TEXT, ASXTGP TEXT, ASXWGO TEXT, ASXSFG TEXT, ASXARU TEXT, ASXFID TEXT, ASXORR TEXT, ASXCPH TEXT, ASXSLA TEXT, ASXAJM TEXT, ASXITG TEXT, ASXEM2 TEXT, ASXSRL
TEXT, ASXDYL TEXT, ASXRCE TEXT, ASXLME TEXT, ASXOPY TEXT, ASXENN TEXT, ASXDTC TEXT, ASXSLX TEXT, ASXSMP TEXT, ASXOBM TEXT, ASXGLB TEXT, ASXFZO TEXT, ASXGNG TEXT, ASXHMY TEXT, ASXBNO TEXT, ASXLVT TEXT, ASXMGV TEXT, ASXIRD TEXT, ASXMLX TEXT, ASXKCN TEXT,
ASXRDY TEXT, ASXNTU TEXT, ASXCL1 TEXT, ASXAVG TEXT, ASXFMS TEXT, ASXVCF TEXT, ASXAXE TEXT, ASXWMA TEXT, ASXIGL TEXT, ASXSMR TEXT, ASXBOC TEXT, ASXSRG TEXT, ASXGVF TEXT, ASXKSC TEXT, ASXGLN TEXT, ASXCEL TEXT, ASXPLT TEXT, ASXMAD TEXT, ASXDOC TEXT, ASXTNK
TEXT, ASXMVE TEXT, ASXVEQ TEXT, ASXIPD TEXT, ASXMGT TEXT, ASXPRL TEXT, ASXIJH TEXT, ASXMCP TEXT, ASX3PL TEXT, ASXFOR TEXT, ASXONT TEXT, ASXEMH TEXT, ASXNOX TEXT, ASXEVO TEXT, ASXVXR TEXT, ASXKLL TEXT, ASXAPD TEXT, ASXBCI TEXT, ASXGPR TEXT, ASXSTA TEXT,
ASXBTI TEXT, ASXHZR TEXT, ASXYOJ TEXT, ASXCRO TEXT, ASXEWC TEXT, ASXIMA TEXT, ASXPOS TEXT, ASXPVS TEXT, ASXKZA TEXT, ASXMML TEXT, ASXFYI TEXT, ASXPCG TEXT, ASXOGC TEXT, ASXSHJ TEXT, ASXJAN TEXT, ASXPBP TEXT, ASXGNX TEXT, ASXHLA TEXT, ASXSOM TEXT, ASXDNK
TEXT, ASXEGN TEXT, ASXCOG TEXT, ASXSVY TEXT, ASXJRL TEXT, ASXREX TEXT, ASXHTG TEXT, ASXNWF TEXT, ASXLRK TEXT, ASXPPG TEXT, ASXBBUS TEXT, ASXCAI TEXT, ASXSYA TEXT, ASXBMN TEXT, ASXD2O TEXT, ASXMTO TEXT, ASXEOL TEXT, ASXVRX TEXT, ASXCGS TEXT, ASXEAI TEXT,
ASXLBY TEXT, ASXEXP TEXT, ASXLEX TEXT, ASX5GG TEXT, ASXNEU TEXT, ASXWIC TEXT, ASXPET TEXT, ASXGDG TEXT, ASXORN TEXT, ASXRNU TEXT, ASXMVB TEXT, ASXSFX TEXT, ASXIBX TEXT, ASXIXR TEXT, ASXFGR TEXT, ASXA2B TEXT, ASXCSX TEXT, ASXEP1 TEXT, ASXAUT TEXT, ASXONE
TEXT, ASXNZM TEXT, ASXGNP TEXT, ASXMX1 TEXT, ASXBKY TEXT, ASXRFG TEXT, ASXPEK TEXT, ASXTEK TEXT, ASXCCV TEXT, ASXEMN TEXT, ASXERF TEXT, ASXCYM TEXT, ASXGTK TEXT, ASXMXC TEXT, ASXSES TEXT, ASXQIP TEXT, ASXMIH TEXT, ASXFLC TEXT, ASXZNO TEXT, ASXASO TEXT,
ASXCUP TEXT, ASXAIM TEXT, ASXCAN TEXT, ASXPGL TEXT, ASXVTG TEXT, ASXAPZ TEXT, ASXBRI TEXT, ASXRDF TEXT, ASXMDR TEXT, ASXPX1 TEXT, ASXTOT TEXT, ASXEGH TEXT, ASXSSG TEXT, ASXNWC TEXT, ASXBYE TEXT, ASXVMT TEXT, ASXSDV TEXT, ASXSEC TEXT, ASXTGF TEXT, ASXFEX
TEXT, ASXTIE TEXT, ASXG1A TEXT, ASXGCY TEXT, ASXVEE TEXT, ASXDTZ TEXT, ASXEVS TEXT, ASXTGM TEXT, ASXUBI TEXT, ASXMYL TEXT, ASXSOR TEXT, ASX5GN TEXT, ASXAHQ TEXT, ASXFSA TEXT, ASXMVR TEXT, ASXKSS TEXT, ASXRZI TEXT, ASXCPV TEXT, ASXISO TEXT, ASXEPD TEXT,
ASXBUD TEXT, ASXETPMAG TEXT, ASXCYG TEXT, ASXCAA TEXT, ASXWMX TEXT, ASXAGH TEXT, ASXICQ TEXT, ASXNSC TEXT, ASXSXE TEXT, ASXIZZ TEXT, ASXBSA TEXT, ASXBCN TEXT, ASXBDC TEXT, ASXGDA TEXT, ASXDSE TEXT, ASXGMD TEXT, ASXPIQ TEXT, ASXIXI TEXT, ASXLOT TEXT, ASXEX1
TEXT, ASXHCH TEXT, ASXAZY TEXT, ASXWHA TEXT, ASXRMY TEXT, ASXLCY TEXT, ASXRYD TEXT, ASXZBT TEXT, ASXBID TEXT, ASXTNG TEXT, ASXEEG TEXT, ASXTTM TEXT, ASXGDC TEXT, ASXWKT TEXT, ASXRXM TEXT, ASXMRM TEXT, ASXLCK TEXT, ASXBSX TEXT, ASXBDM TEXT, ASXRCT TEXT,
ASXIKE TEXT, ASXCAM TEXT, ASXFNP TEXT, ASXPEN TEXT, ASXSWF TEXT, ASXNOV TEXT, ASXEER TEXT, ASXIVR TEXT, ASXRTG TEXT, ASXWJA TEXT, ASXAGY TEXT, ASXACQ TEXT, ASXHZN TEXT, ASXWWI TEXT, ASXANP TEXT, ASXZEO TEXT, ASXLPD TEXT, ASXTGN TEXT, ASXRVR TEXT, ASXAVA
TEXT, ASXURF TEXT, ASXLVH TEXT, ASXBLU TEXT, ASXFFG TEXT, ASXLIT TEXT, ASXLAU TEXT, ASXRDG TEXT, ASXGOW TEXT, ASXAMN TEXT, ASXCCR TEXT, ASXFAR TEXT, ASXDUR TEXT, ASXAHX TEXT, ASXARA TEXT, ASXMEA TEXT, ASXAGD TEXT, ASXDUG TEXT, ASXMRC TEXT, ASXNTD TEXT,
ASXFBR TEXT, ASXWAT TEXT, ASXQPM TEXT, ASXTOP TEXT, ASXKPG TEXT, ASXSNC TEXT, ASXPEX TEXT, ASXTIG TEXT, ASXCII TEXT, ASXTWD TEXT, ASXRNT TEXT, ASXGGG TEXT, ASXSGH TEXT, ASXSELF TEXT, ASXLGP TEXT, ASXBKT TEXT, ASXHYM TEXT, ASXAEG TEXT, ASXGAP TEXT, ASXRCW
TEXT, ASXCLU TEXT, ASXAZS TEXT, ASXCRW TEXT, ASXOCC TEXT, ASXIDT TEXT, ASXVMS TEXT, ASXARV TEXT, ASXSDI TEXT, ASXTUL TEXT, ASXAPC TEXT, ASXRND TEXT, ASXCOS TEXT, ASXKIN TEXT, ASXPDI TEXT, ASXCOB TEXT, ASXBBX TEXT, ASXAOP TEXT, ASXTMH TEXT, ASXTSO TEXT,
ASXYFZ TEXT, ASXWCG TEXT, ASXGTN TEXT, ASXEPY TEXT, ASXCTP TEXT, ASXMWY TEXT, ASXGWR TEXT, ASXCVV TEXT, ASXIVZ TEXT, ASXRHT TEXT, ASXBRV TEXT, ASXTSI TEXT, ASXAT1 TEXT, ASXSTG TEXT, ASX8VI TEXT, ASXRKN TEXT, ASXNET TEXT, ASXMVS TEXT, ASXMBH TEXT, ASXKIS
TEXT, ASXSUV TEXT, ASXVMY TEXT, ASXGAS TEXT, ASXRFX TEXT, ASXAMX TEXT, ASXPTB TEXT, ASXRXL TEXT, ASXAUZ TEXT, ASXCD3 TEXT, ASXACW TEXT, ASXZER TEXT, ASXWOA TEXT, ASXMMI TEXT, ASXPRT TEXT, ASXCYP TEXT, ASXTAM TEXT, ASXSNS TEXT, ASXDNA TEXT, ASXWEC TEXT,
ASXPKS TEXT, ASXVR1 TEXT, ASXMSV TEXT, ASXBOT TEXT, ASXGRV TEXT, ASXANG TEXT, ASXACF TEXT, ASXSHM TEXT, ASXNNT TEXT, ASXRSH TEXT, ASXAND TEXT, ASXMOGL TEXT, ASXNUH TEXT, ASXUBN TEXT, ASXHMX TEXT, ASXBC8 TEXT, ASXBRU TEXT, ASXTTT TEXT, ASXIHR TEXT, ASXDEV
TEXT, ASXFSG TEXT, ASXCMP TEXT, ASXFUN TEXT, ASXATC TEXT, ASXLPI TEXT, ASXXAM TEXT, ASXOEC TEXT, ASXMOZ TEXT, ASXMGU TEXT, ASXOSL TEXT, ASXBRB TEXT, ASXOKU TEXT, ASXLCL TEXT, ASXNCC TEXT, ASXOZG TEXT, ASXIOD TEXT, ASXPOD TEXT, ASXWAA TEXT, ASXGTG TEXT,
ASXPCK TEXT, ASXINF TEXT, ASXNML TEXT, ASXKKO TEXT, ASXESK TEXT, ASX3DA TEXT, ASXMYE TEXT, ASXCWZ TEXT, ASXTI1 TEXT, ASXVAN TEXT, ASXGEN TEXT, ASXTIP TEXT, ASXCIE TEXT, ASXCSS TEXT, ASXPGC TEXT, ASXHIT TEXT, ASXSND TEXT, ASXMEI TEXT, ASXZNC TEXT, ASXIXU
TEXT, ASXWRL TEXT, ASXTER TEXT, ASXPH2 TEXT, ASXICT TEXT, ASXFHS TEXT, ASXIME TEXT, ASXPAL TEXT, ASXSIO TEXT, ASXCLB TEXT, ASXMAM TEXT, ASXBFC TEXT, ASXEDE TEXT, ASXKME TEXT, ASXPUR TEXT, ASXJYC TEXT, ASXASP TEXT, ASXDRO TEXT, ASXDCG TEXT, ASXTZN TEXT,
ASXIKO TEXT, ASXTGA TEXT, ASXLBL TEXT, ASXADA TEXT, ASXZLD TEXT, ASXMDC TEXT, ASXATH TEXT, ASXCAY TEXT, ASXSEQ TEXT, ASXCLX TEXT, ASXAKL TEXT, ASXHRZ TEXT, ASXBBC TEXT, ASXAAR TEXT, ASXAVL TEXT, ASXMIO TEXT, ASXHWK TEXT, ASXCD2 TEXT, ASXASN TEXT, ASXARL
TEXT, ASXAVC TEXT, ASXCVL TEXT, ASXTNY TEXT, ASXSEG TEXT, ASXBCB TEXT, ASXTPD TEXT, ASXQTM TEXT, ASXLRS TEXT, ASX8IH TEXT, ASXAUC TEXT, ASXAFA TEXT, ASXFFI TEXT, ASXHAV TEXT, ASXHRL TEXT, ASXSPZ TEXT, ASXFCT TEXT, ASXELS TEXT, ASXC6C TEXT, ASXMXI TEXT,
ASXAR9 TEXT, ASXDGR TEXT, ASXBRK TEXT, ASXNZO TEXT, ASXFSI TEXT, ASXISU TEXT, ASXRTE TEXT, ASXDEM TEXT, ASXVLS TEXT, ASXMEP TEXT, ASXBML TEXT, ASXKSN TEXT, ASXPTX TEXT, ASXTOE TEXT, ASXCDX TEXT, ASXLER TEXT, ASXDTS TEXT, ASXATL TEXT, ASXOVT TEXT, ASXTGH
TEXT, ASXKPT TEXT, ASXDOU TEXT, ASXASH TEXT, ASXIBC TEXT, ASXMEC TEXT, ASXAVR TEXT, ASXDBF TEXT, ASXBRL TEXT, ASXNUS TEXT, ASXADS TEXT, ASXQFE TEXT, ASXPDZ TEXT, ASXMAN TEXT, ASXNGY TEXT, ASXBPH TEXT, ASXSKF TEXT, ASXBEAR TEXT, ASXHJPN TEXT, ASXTDL TEXT,
ASXCHZ TEXT, ASXLSX TEXT, ASXEUR TEXT, ASXMPP TEXT, ASXAML TEXT, ASXCKA TEXT, ASXKZR TEXT, ASXICI TEXT, ASXCV1 TEXT, ASXBOL TEXT, ASXCCE TEXT, ASXAC8 TEXT, ASXREY TEXT, ASXMA1 TEXT, ASXMAET TEXT, ASXWHK TEXT, ASXCOO TEXT, ASXFPC TEXT, ASXBLG TEXT, ASXATS
TEXT, ASXNAM TEXT, ASXAEI TEXT, ASXPYG TEXT, ASXCHM TEXT, ASXPTL TEXT, ASXMZZ TEXT, ASXSIH TEXT, ASXGML TEXT, ASXFML TEXT, ASXTRY TEXT, ASXICG TEXT, ASXRCP TEXT, ASXDRX TEXT, ASXSSL TEXT, ASXMEM TEXT, ASXAOU TEXT, ASXEST TEXT, ASXXF1 TEXT, ASXRFT TEXT,
ASXEXL TEXT, ASXLOM TEXT, ASXPSC TEXT, ASXSRK TEXT, ASXDCC TEXT, ASXSEN TEXT, ASXKRR TEXT, ASXOEL TEXT, ASXTMT TEXT, ASXDME TEXT, ASXINES TEXT, ASXTMZ TEXT, ASXPAF TEXT, ASXFTC TEXT, ASXKAI TEXT, ASXSMX TEXT, ASXANA TEXT, ASXCOI TEXT, ASXKLA TEXT, ASXMAY
TEXT, ASXLKO TEXT, ASXENR TEXT, ASXKTG TEXT, ASXRPM TEXT, ASXBIS TEXT, ASXBDA TEXT, ASXAPW TEXT, ASXMSM TEXT, ASXNAC TEXT, ASXDXB TEXT, ASXCPN TEXT, ASXKPO TEXT, ASXKTD TEXT, ASXKOV TEXT, ASXDGH TEXT, ASXELT TEXT, ASXEDC TEXT, ASXCST TEXT, ASXPAB TEXT,
ASXS2R TEXT, ASXCCA TEXT, ASXSMN TEXT, ASXTPC TEXT, ASXAV1 TEXT, ASXNCL TEXT, ASXBLY TEXT, ASXGBZ TEXT, ASXVRC TEXT, ASXCGA TEXT, ASXWWG TEXT, ASXEYE TEXT, ASXE2M TEXT, ASXESR TEXT, ASXXRF TEXT, ASXCCZ TEXT, ASXSTN TEXT, ASXPO3 TEXT, ASXTON TEXT, ASXRAP
TEXT, ASXROG TEXT, ASXOSP TEXT, ASXHGO TEXT, ASXAJQ TEXT, ASXAFL TEXT, ASXTD1 TEXT, ASXREE TEXT, ASXACB TEXT, ASXSGQ TEXT, ASXATR TEXT, ASXAME TEXT, ASXBBL TEXT, ASXLRT TEXT, ASXHXG TEXT, ASXMCL TEXT, ASXPEC TEXT, ASXGEV TEXT, ASXIVX TEXT, ASXRDH TEXT,
ASXVII TEXT, ASXTFL TEXT, ASXCUE TEXT, ASXDRE TEXT, ASXDEL TEXT, ASXSWK TEXT, ASXPNC TEXT, ASXQHL TEXT, ASXBIT TEXT, ASXAKG TEXT, ASXRCL TEXT, ASXBNL TEXT, ASXAKM TEXT, ASXARD TEXT, ASXEQR TEXT, ASXYRL TEXT, ASXMEU TEXT, ASXACR TEXT, ASXDAV TEXT, ASXMTH
TEXT, ASXRVS TEXT, ASXLNU TEXT, ASXNTI TEXT, ASXECL TEXT, ASXCD1 TEXT, ASXEQX TEXT, ASXHRN TEXT, ASXCI1 TEXT, ASXNSX TEXT, ASXMSL TEXT, ASX8CO TEXT, ASXTNR TEXT, ASXNSB TEXT, ASXXTE TEXT, ASXVYS TEXT, ASXCLE TEXT, ASXIXC TEXT, ASXMKR TEXT, ASXGAL TEXT,
ASXWRM TEXT, ASXPTG TEXT, ASXSOV TEXT, ASXEAS TEXT, ASXLCD TEXT, ASXIMC TEXT, ASXEBG TEXT, ASXSKY TEXT, ASXERM TEXT, ASXMRL TEXT, ASXVMX TEXT, ASXOSX TEXT, ASXBYI TEXT, ASXMYG TEXT, ASXBAT TEXT, ASXKRM TEXT, ASXPYR TEXT, ASXCGB TEXT, ASXVIP TEXT, ASXMKAX
TEXT, ASXPFT TEXT, ASXCAF TEXT, ASXRLT TEXT, ASXTRT TEXT, ASXPIL TEXT, ASXVBC TEXT, ASX1AD TEXT, ASXPXS TEXT, ASXBHL TEXT, ASXS66 TEXT, ASXVAL TEXT, ASXSTM TEXT, ASXTSL TEXT, ASXJAT TEXT, ASXAGS TEXT, ASXRES TEXT, ASXAUR TEXT, ASXCIW TEXT, ASXK2F TEXT,
ASXHT8 TEXT, ASXMAG TEXT, ASXSKN TEXT, ASXIP1 TEXT, ASXCBL TEXT, ASXAVE TEXT, ASXCNB TEXT, ASXVEN TEXT, ASXCTO TEXT, ASX14D TEXT, ASXRGS TEXT, ASXNAG TEXT, ASXCAD TEXT, ASXHFY TEXT, ASXDKM TEXT, ASXAWN TEXT, ASXVTI TEXT, ASXVRS TEXT, ASXKAT TEXT, ASXAGE
TEXT, ASXDTR TEXT, ASXMNB TEXT, ASXFEL TEXT, ASXPRO TEXT, ASXCLA TEXT, ASXGME TEXT, ASXJAL TEXT, ASXMFD TEXT, ASXFLX TEXT, ASXESH TEXT, ASXHSC TEXT, ASXAMT TEXT, ASXADV TEXT, ASXIGE TEXT, ASXAQI TEXT, ASXCZR TEXT, ASXLSA TEXT, ASXGC1 TEXT, ASXPLY TEXT,
ASXMPX TEXT, ASXHIL TEXT, ASXAIQ TEXT, ASXASW TEXT, ASXINP TEXT, ASXAJL TEXT, ASXODY TEXT, ASXEPN TEXT, ASXAJX TEXT, ASXAON TEXT, ASXATU TEXT, ASXRDM TEXT, ASXAWV TEXT, ASXMPA TEXT, ASXKAU TEXT, ASXMOQ TEXT, ASXAPH TEXT, ASXVKA TEXT, ASXVBS TEXT, ASXFPL
TEXT, ASXNYR TEXT, ASXHYD TEXT, ASXEME TEXT, ASXTOU TEXT, ASXFFR TEXT, ASXTAS TEXT, ASXARR TEXT, ASXIPT TEXT, ASXGMR TEXT, ASXGMN TEXT, ASXJAY TEXT, ASXTPP TEXT, ASXCOY TEXT, ASXWLD TEXT, ASXEPM TEXT, ASXCAE TEXT, ASXSMG TEXT, ASXTIA TEXT, ASXFFT TEXT,
ASXONX TEXT, ASXUUL TEXT, ASXBSR TEXT, ASXSSO TEXT, ASXAIV TEXT, ASXPWN TEXT, ASXRHI TEXT, ASXCLH TEXT, ASXRNO TEXT, ASXBWF TEXT, ASXBEX TEXT, ASXECS TEXT, ASXBSM TEXT, ASXFOD TEXT, ASXOVN TEXT, ASX9SP TEXT, ASXPAA TEXT, ASXGMC TEXT, ASXMRD TEXT, ASXCT1
TEXT, ASXPNX TEXT, ASXYBR TEXT, ASXHNG TEXT, ASXARE TEXT, ASXMEY TEXT, ASXRDN TEXT, ASXMXO TEXT, ASXFRB TEXT, ASXTRU TEXT, ASXBEM TEXT, ASXSPA TEXT, ASXHPP TEXT, ASXMIL TEXT, ASXVMC TEXT, ASXGTE TEXT, ASXCCG TEXT, ASXBNZ TEXT, ASXAMG TEXT, ASXTLM TEXT,
ASXCWX TEXT, ASXADX TEXT, ASXICL TEXT, ASXVPR TEXT, ASXSRN TEXT, ASXCNW TEXT, ASXORM TEXT, ASXAD1 TEXT, ASXTTB TEXT, ASXWAK TEXT, ASXVN8 TEXT, ASXATX TEXT, ASXLBT TEXT, ASXEM1 TEXT, ASXAXI TEXT, ASXHWH TEXT, ASXAU1 TEXT, ASXECP TEXT, ASXAHC TEXT, ASXIBG
TEXT, ASXACP TEXT, ASXANX TEXT, ASXRWD TEXT, ASXSE1 TEXT, ASXAHF TEXT, ASXOLL TEXT, ASXAZI TEXT, ASXSHG TEXT, ASXPNL TEXT, ASXLMG TEXT, ASXCNJ TEXT, ASXAL3 TEXT, ASXVEC TEXT, ASXTAR TEXT, ASXPRX TEXT, ASXADY TEXT, ASXA1G TEXT, ASXGSN TEXT, ASXASQ TEXT,
ASXMVL TEXT, ASXUCM TEXT, ASXPPL TEXT, ASXNWE TEXT, ASXCLI TEXT, ASXNUC TEXT, ASXCOD TEXT, ASXEMD TEXT, ASXTTI TEXT, ASXCHK TEXT, ASXEVE TEXT, ASXHRR TEXT, ASXEMB TEXT, ASXHMD TEXT, ASXBMH TEXT, ASXODA TEXT, ASXMKL TEXT, ASXVMG TEXT, ASXMKG TEXT, ASXMMJ
TEXT, ASXSOP TEXT, ASXHVM TEXT, ASXARN TEXT, ASXSUP TEXT, ASXBPP TEXT, ASXQEM TEXT, ASXSKS TEXT, ASXAS1 TEXT, ASXOEX TEXT, ASXGFL TEXT, ASXEGY TEXT, ASXDCL TEXT, ASXAGR TEXT, ASXNAE TEXT, ASXJXT TEXT, ASXMGL TEXT, ASXMCT TEXT, ASXIDA TEXT, ASXRGL TEXT,
ASXEGL TEXT, ASXSNG TEXT, ASXOAR TEXT, ASXPGM TEXT, ASXPVE TEXT, ASXLNY TEXT, ASXMR1 TEXT, ASXUCW TEXT, ASXGLH TEXT, ASXCE1 TEXT, ASXINV TEXT, ASXKNO TEXT, ASXCGN TEXT, ASXFRM TEXT, ASXCG1 TEXT, ASXMAT TEXT, ASXPG1 TEXT, ASXNGE TEXT, ASXICS TEXT, ASXEQE
TEXT, ASXMCM TEXT, ASXPFG TEXT, ASXMHC TEXT, ASXVR8 TEXT, ASXCAV TEXT, ASXNXM TEXT, ASXBGT TEXT, ASXTV2 TEXT, ASXAL8 TEXT, ASXDEX TEXT, ASXISD TEXT, ASXMPR TEXT, ASXSI6 TEXT, ASXMM8 TEXT, ASXAQX TEXT, ASXEMU TEXT, ASXSBW TEXT, ASXWOO TEXT, ASXJDR TEXT,
ASXDVN TEXT, ASXSCL TEXT, ASXKWR TEXT, ASXFRX TEXT, ASXID8 TEXT, ASXAYM TEXT, ASXTCF TEXT, ASXPXX TEXT, ASXSCI TEXT, ASXCAQ TEXT, ASXHAW TEXT, ASXKYK TEXT, ASXBTC TEXT, ASXACU TEXT, ASXAIR TEXT, ASXBUY TEXT, ASXCM8 TEXT, ASXJCS TEXT, ASXVOL TEXT, ASXSHN
TEXT, ASX3MF TEXT, ASXBCC TEXT, ASXKFE TEXT, ASXAUK TEXT, ASXRIE TEXT, ASXOAU TEXT, ASXKAM TEXT, ASXESS TEXT, ASXHXL TEXT, ASXMTC TEXT, ASXFPP TEXT, ASXCAG TEXT, ASXSAU TEXT, ASXMPH TEXT, ASXACS TEXT, ASXA1M TEXT, ASXECG TEXT, ASXAMO TEXT, ASXCXM TEXT,
ASXOLI TEXT, ASXENA TEXT, ASXELE TEXT, ASXSIX TEXT, ASXGBE TEXT, ASXGLE TEXT, ASXDDD TEXT, ASXOGA TEXT, ASXDCX TEXT, ASXAUH TEXT, ASXMSR TEXT, ASXPGY TEXT, ASXHGL TEXT, ASXBOA TEXT, ASXLSH TEXT, ASXAUL TEXT, ASXALT TEXT, ASXSHO TEXT, ASXGLV TEXT, ASXCLZ
TEXT, ASXPPY TEXT, ASXMBM TEXT, ASXDM1 TEXT, ASXTPO TEXT, ASXRLG TEXT, ASXECT TEXT, ASXZGL TEXT, ASXCAZ TEXT, ASXCY5 TEXT, ASXFZR TEXT, ASXCLT TEXT, ASXCXU TEXT, ASXVIG TEXT, ASXCGO TEXT, ASXDMC TEXT, ASXNPM TEXT, ASXTKM TEXT, ASXCBE TEXT, ASXZAG TEXT,
ASXAAU TEXT, ASXSW1 TEXT, ASXTEG TEXT, ASXKTA TEXT, ASXBIQ TEXT, ASXSGC TEXT, ASXIQ3 TEXT, ASXWNR TEXT, ASXSPQ TEXT, ASXENX TEXT, ASXSUD TEXT, ASXABX TEXT, ASXMDI TEXT, ASXHNR TEXT, ASXMOB TEXT, ASXAQD TEXT, ASXAYI TEXT, ASXHLX TEXT, ASXREZ TEXT, ASXLAW
TEXT, ASXRIM TEXT, ASXFIJ TEXT, ASXANL TEXT, ASXSHH TEXT, ASXBCT TEXT, ASXXST TEXT, ASXBEE TEXT, ASXADD TEXT, ASXA3D TEXT, ASXGRL TEXT, ASXSCU TEXT, ASXABV TEXT, ASXTDO TEXT, ASXNNG TEXT, ASXSRZ TEXT, ASXCRS TEXT, ASXPTR TEXT, ASXILA TEXT, ASXWSI TEXT,
ASXCNL TEXT, ASXSHE TEXT, ASXNC6 TEXT, ASXDXN TEXT, ASXMRQ TEXT, ASXBTR TEXT, ASXTZL TEXT, ASXAKO TEXT, ASXMCE TEXT, ASXLIN TEXT, ASX4CE TEXT, ASX2BE TEXT, ASXMEB TEXT, ASXNSM TEXT, ASXAUN TEXT, ASXPCL TEXT, ASXYPB TEXT, ASXTIN TEXT, ASXSMI TEXT, ASXTRL
TEXT, ASXHCT TEXT, ASXGUL TEXT, ASXKBC TEXT, ASXPSL TEXT, ASXLSR TEXT, ASXLPE TEXT, ASXBMG TEXT, ASXSIT TEXT, ASXTMR TEXT, ASXPHL TEXT, ASXWBE TEXT, ASXRFR TEXT, ASXKLO TEXT, ASXPUA TEXT, ASXEMT TEXT, ASXCZL TEXT, ASXCTE TEXT, ASXLLO TEXT, ASXARO TEXT,
ASXGIB TEXT, ASXWEL TEXT, ASXVIC TEXT, ASXNRX TEXT, ASXRMX TEXT, ASXMEL TEXT, ASXENT TEXT, ASXADR TEXT, ASXFEI TEXT, ASXKMT TEXT, ASXBAR TEXT, ASXCR1 TEXT, ASXGTR TEXT, ASXEN1 TEXT, ASXBXN TEXT, ASXSPN TEXT, ASXDDB TEXT, ASXCRL TEXT, ASXCAP TEXT, ASXSCT
TEXT, ASXODM TEXT, ASXSLZ TEXT, ASXCXZ TEXT, ASXHPR TEXT, ASXMBK TEXT, ASXCDY TEXT, ASXG88 TEXT, ASXBNR TEXT, ASXQGL TEXT, ASXAJJ TEXT, ASXRGI TEXT, ASXLCE TEXT, ASXMXR TEXT, ASXERL TEXT, ASXANW TEXT, ASXMLS TEXT, ASXAIY TEXT, ASXDVL TEXT, ASXWFL TEXT,
ASXCXX TEXT, ASXPF1 TEXT, ASXFFC TEXT, ASXCBY TEXT, ASXERG TEXT, ASXKCC TEXT, ASXSCN TEXT, ASXXTC TEXT, ASXMRR TEXT, ASXDC2 TEXT, ASXSRI TEXT, ASXBMO TEXT, ASXWC8 TEXT, ASXEVZ TEXT, ASXDTM TEXT, ASXANR TEXT, ASXNES TEXT, ASXRML TEXT, ASXFDM TEXT, ASXHHI
TEXT, ASXIKW TEXT, ASXMHI TEXT, ASXPNN TEXT, ASXTSC TEXT, ASXBAS TEXT, ASXMRG TEXT, ASXKGM TEXT, ASXGSM TEXT, ASXSIV TEXT, ASXAGC TEXT, ASXPRM TEXT, ASXKSM TEXT, ASXAMD TEXT, ASXAEE TEXT, ASXICE TEXT, ASXAUQ TEXT, ASXENV TEXT, ASXBYH TEXT, ASXNGS TEXT,
ASXMRZ TEXT, ASXAFW TEXT, ASXKNM TEXT, ASXQFY TEXT, ASXRLC TEXT, ASXCSE TEXT, ASXEAX TEXT, ASXALY TEXT, ASXIMPQ TEXT, ASXAFR TEXT, ASXICR TEXT, ASX92E TEXT, ASXTG1 TEXT, ASXRAN TEXT, ASXMLM TEXT, ASXMHK TEXT, ASXTCO TEXT, ASXTRN TEXT, ASXNZS TEXT, ASXRCR
TEXT, ASXSBR TEXT, ASXGED TEXT, ASXIPB TEXT, ASXWTL TEXT, ASXSER TEXT, ASXGBR TEXT, ASXYOW TEXT, ASXWCN TEXT, ASXFAU TEXT, ASXSRH TEXT, ASXM2R TEXT, ASXPNM TEXT, ASXBUX TEXT, ASXAVW TEXT, ASXQXR TEXT, ASXFTZ TEXT, ASXDAF TEXT, ASXMSI TEXT, ASXSUH TEXT,
ASXGNM TEXT, ASXAPG TEXT, ASXSGI TEXT, ASXPVW TEXT, ASXTMK TEXT, ASXFFF TEXT, ASXIS3 TEXT, ASXNVU TEXT, ASXRDS TEXT, ASXTYM TEXT, ASXFGL TEXT, ASXFNT TEXT, ASXHCD TEXT, ASXCF1 TEXT, ASXFNX TEXT, ASXESE TEXT, ASXROO TEXT, ASXTPS TEXT, ASXOKR TEXT, ASXJHL
TEXT, ASXSRY TEXT, ASXCFO TEXT, ASXTMG TEXT, ASXLV1 TEXT, ASXTYX TEXT, ASXRMP TEXT, ASXM24 TEXT, ASXBDG TEXT, ASXOZM TEXT, ASXCDT TEXT, ASXPRS TEXT, ASXOXX TEXT, ASXTKL TEXT, ASXCPT TEXT, ASXCUL TEXT, ASXWML TEXT, ASXPSA TEXT, ASXKP2 TEXT, ASXMSG TEXT,
ASXOLH TEXT, ASXIVT TEXT, ASXGOO TEXT, ASXPOW TEXT, ASXSTK TEXT, ASXLHM TEXT, ASXCRB TEXT, ASXNTL TEXT, ASXICN TEXT, ASX1AG TEXT, ASXMQR TEXT, ASXOPL TEXT, ASXAPV TEXT, ASXAJY TEXT, ASXEZZ TEXT, ASXTMX TEXT, ASXKFM TEXT, ASX1ST TEXT, ASXNWM TEXT, ASXGGX
TEXT, ASXSP3 TEXT, ASXRNE TEXT, ASXPGD TEXT, ASXMOH TEXT, ASXLIO TEXT, ASXSIS TEXT, ASXDLT TEXT, ASXGES TEXT, ASXKTE TEXT, ASXNMR TEXT, ASXGO2 TEXT, ASXOKJ TEXT, ASXRBR TEXT, ASXNCR TEXT, ASXAAJ TEXT, ASXAQC TEXT, ASXTHR TEXT, ASXCZN TEXT, ASXAWJ TEXT,
ASXNME TEXT, ASXDDT TEXT, ASXCML TEXT, ASXPAM TEXT, ASXZMI TEXT, ASXHHM TEXT, ASXRXH TEXT, ASXJPR TEXT, ASXKGD TEXT, ASXAQS TEXT, ASXFIN TEXT, ASXSFM TEXT, ASXAX8 TEXT, ASXPVL TEXT, ASXAOA TEXT, ASXDLC TEXT, ASXVOR TEXT, ASXPAK TEXT, ASXCRM TEXT, ASXMEG
TEXT, ASXAEV TEXT, ASXKEY TEXT, ASXLCT TEXT, ASXVIA TEXT, ASXTEM TEXT, ASXPKO TEXT, ASXDTI TEXT, ASXBHD TEXT, ASXBEL TEXT, ASXERW TEXT, ASXVAR TEXT, ASXAER TEXT, ASXBLZ TEXT, ASXQSML TEXT, ASXEFE TEXT, ASXIDZ TEXT, ASXOAK TEXT, ASXWSR TEXT, ASXAHN TEXT,
ASXCAU TEXT, ASXTMS TEXT, ASXDET TEXT, ASXAUP TEXT, ASXRNX TEXT, ASXMAX TEXT, ASXATP TEXT, ASXN1H TEXT, ASXFGO TEXT, ASXRMG TEXT, ASXIPC TEXT, ASXIGN TEXT, ASXGLA TEXT, ASXSYT TEXT, ASXSIL TEXT, ASXCMC TEXT, ASXPKD TEXT, ASXAAP TEXT, ASXSVS TEXT, ASXBPM
TEXT, ASXM8S TEXT, ASXFE8 TEXT, ASXDMG TEXT, ASXZEU TEXT, ASXFTT TEXT, ASXCMD TEXT, ASXTML TEXT, ASXSAN TEXT, ASXCL8 TEXT, ASXTTA TEXT, ASXGGE TEXT, ASXNXE TEXT, ASXNOR TEXT, ASXEMP TEXT, ASXRMI TEXT, ASXIMS TEXT, ASXUUV TEXT, ASXGPS TEXT, ASXCWL TEXT,
ASXMTB TEXT, ASXLML TEXT, ASXWNB TEXT, ASXIEQ TEXT, ASXMCX TEXT, ASXKOR TEXT, ASXCIO TEXT, ASXHGM TEXT, ASXT3D TEXT, ASXLVE TEXT, ASXKLR TEXT, ASXIVO TEXT, ASXHHY TEXT, ASXKKL TEXT, ASXDOR TEXT, ASXNSE TEXT, ASXEXO TEXT, ASXIEC TEXT, ASXOEQ TEXT, ASXAO1
TEXT, ASXRAG TEXT, ASXRD1 TEXT, ASXSF1 TEXT, ASXARC TEXT, ASXHOR TEXT, ASXSTC TEXT, ASXMDX TEXT, ASXAXT TEXT, ASXAGJ TEXT, ASXMMR TEXT, ASXNMG TEXT, ASXTRM TEXT, ASXR3D TEXT, ASXLHB TEXT, ASXCYQ TEXT, ASXQSS TEXT, ASXRMT TEXT, ASXCVS TEXT, ASXGCR TEXT,
ASXRPG TEXT, ASXAKN TEXT, ASXTNP TEXT, ASXAHK TEXT, ASXTTL TEXT, ASXATM TEXT, ASXPBX TEXT, ASXCGM TEXT, ASXBIR TEXT, ASXQUE TEXT, ASXPCH TEXT, ASXCCJ TEXT, ASXTOM TEXT, ASXE2E TEXT, ASXAIB TEXT, ASXLAM TEXT, ASXQTG TEXT, ASXABL TEXT, ASXCDH TEXT, ASXREF
TEXT, ASXKNH TEXT, ASXOOK TEXT, ASX8EC TEXT);";


         if ($mysqli->query($sql)) {
            printf("Table tutorials_tbl created successfully.<br />");
         }
         if ($mysqli->errno) {
            printf("Could not create table: %s<br />", $mysqli->error);
         }

         $mysqli->close();
      ?>
   </body>
</html>