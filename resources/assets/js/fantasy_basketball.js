// My Team Sample Teams
document.fbForm.mySampleTeam1.onclick = function(event) { 
    event.preventDefault(); 
    document.fbForm['my-team-stats'].value = sampleTeam1;
}

document.fbForm.mySampleTeam2.onclick = function(event) { 
    event.preventDefault(); 
    document.fbForm['my-team-stats'].value = sampleTeam2;
}

document.fbForm.mySampleTeam3.onclick = function(event) { 
    event.preventDefault(); 
    document.fbForm['my-team-stats'].value = sampleTeam3;
}

document.fbForm.clearMyTeam.onclick = function(event) {
    event.preventDefault();
    document.fbForm['my-team-stats'].value = "";
}

// Opponent team sample teams
document.fbForm.oppSampleTeam1.onclick = function(event) { 
    event.preventDefault(); 
    document.fbForm['opponent-team-stats'].value = sampleTeam1;
}

document.fbForm.oppSampleTeam2.onclick = function(event) { 
    event.preventDefault(); 
    document.fbForm['opponent-team-stats'].value = sampleTeam2;
}

document.fbForm.oppSampleTeam3.onclick = function(event) { 
    event.preventDefault(); 
    document.fbForm['opponent-team-stats'].value = sampleTeam3;
}

document.fbForm.clearOppTeam.onclick = function(event) {
    event.preventDefault();
    document.fbForm['opponent-team-stats'].value = "";
}

// Games
document.fbForm.oneGameEach.onclick = function(event) {
    event.preventDefault(); 
    document.fbForm.games.value = oneGameEach;
}

document.fbForm.playoffsRound1.onclick = function(event) {
    event.preventDefault();
    document.fbForm.games.value = playoffsRound1;
}

document.fbForm.playoffsRound2.onclick = function(event) {
    event.preventDefault();
    document.fbForm.games.value = playoffsRound2;
}

document.fbForm.playoffsRound3.onclick = function(event) {
    event.preventDefault();
    document.fbForm.games.value = playoffsRound3;
}

document.fbForm.clearGames.onclick = function(event) {
    event.preventDefault();
    document.fbForm.games.value = "";
}

var playoffsRound1 = "8\t7\t8\t7\t7\t8\t7\t7\t7\t8\t7\t7\t7\t6\t6\t8\t8\t7\t6\t8\t7\t7\t8\t8\t8\t7\t7\t7\t7\t8";
var playoffsRound2 = "7\t8\t7\t7\t8\t7\t7\t7\t7\t7\t6\t7\t9\t7\t7\t6\t8\t7\t7\t6\t6\t6\t7\t7\t8\t7\t7\t7\t7\t8";
var playoffsRound3 = "7\t7\t6\t7\t6\t8\t8\t7\t7\t7\t7\t7\t5\t7\t8\t7\t7\t7\t7\t8\t8\t7\t7\t7\t6\t7\t8\t8\t7\t7";
var oneGameEach = "1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1\t1";

var sampleTeam1 = "PG\tStephen Curry, GS PGBreaking Video\t\r\n33.4\t8.3\/17.7\t.469\t4.1\/4.5\t.916\t4.0\t4.3\t6.4\t1.7\t0.2\t2.9\t24.7\t\t8.01\t99.9\t+0\r\nSG\tYogi Ferrell, Dal SG, PG\t\r\n24.1\t3.4\/7.9\t.424\t1.6\/2.0\t.821\t1.5\t2.1\t3.2\t0.9\t0.2\t1.6\t9.8\t\t5.69\t41.5\t-4.1\r\nSF\tCarmelo Anthony, NY SF, PF\t\r\n34.0\t8.5\/19.1\t.443\t4.3\/5.2\t.824\t2.2\t6.1\t2.9\t0.9\t0.5\t2.0\t23.4\t\t5.93\t99.7\t+0\r\nPF\tMarkieff Morris, Wsh PF\t\r\n32.1\t5.6\/12.3\t.455\t2.7\/3.3\t.816\t1.0\t6.8\t1.8\t1.2\t0.6\t1.9\t14.9\t\t4.40\t76.9\t+4.4\r\nC\tJusuf Nurkic, Por C, PF\t\r\n18.0\t3.4\/6.6\t.515\t1.3\/2.5\t.504\t0.0\t5.8\t1.3\t0.6\t0.8\t1.8\t8.1\t\t-3.14\t43.7\t+6.5\r\nG\tGoran Dragic, Mia PG\t\r\n34.3\t7.4\/15.2\t.485\t3.9\/5.0\t.785\t1.6\t3.9\t6.2\t1.0\t0.2\t3.1\t20.3\t\t5.84\t93.3\t+0\r\nF\tDario Saric, Phi SF, PF\t\r\n24.4\t4.0\/10.0\t.397\t1.6\/2.1\t.784\t1.3\t5.9\t1.8\t0.6\t0.3\t1.9\t10.8\t\t4.67\t46.9\t+12\r\nUTIL\tDraymond Green, GS SF, PF, C\t\r\n32.9\t3.6\/8.4\t.433\t1.8\/2.7\t.674\t1.1\t8.2\t7.3\t2.1\t1.5\t2.3\t10.2\t\t7.69\t99.9\t+0\r\nUTIL\tJonas Valanciunas, Tor C\t\r\n26.9\t5.0\/9.3\t.538\t2.4\/2.8\t.852\t0.0\t9.9\t0.7\t0.5\t0.7\t1.4\t12.4\t\t3.90\t89.2\t-0.3\r\nUTIL\tKlay Thompson, GS SG, SF\t\r\n34.1\t8.2\/17.3\t.474\t2.4\/2.8\t.841\t3.4\t3.8\t2.0\t0.8\t0.5\t1.8\t22.1\t\t7.24\t99.8\t+0\r\nBENCH\t\tFEB 22\t\t2017 SEASON STATS\t\tRESEARCH\r\nSLOT\tPLAYER, TEAM POS\tACTION\t\tOPP\tSTATUS ET\t\tMIN\tFGM\/FGA\tFG%\tFTM\/FTA\tFT%\t3PM\tREB\tAST\tSTL\tBLK\tTO\tPTS\t\tPR15\t%OWN\t+\/-\r\nBench\tPaul Millsap, Atl PF\t\r\n34.2\t6.3\/14.3\t.439\t4.2\/5.5\t.763\t1.2\t7.9\t3.8\t1.5\t1.0\t2.2\t17.9\t\t5.42\t99.3\t+0\r\nBench\tAl-Farouq Aminu*, Por SF, PF  OBreaking News\t\r\n29.1\t2.9\/7.9\t.367\t1.4\/1.8\t.746\t1.1\t7.4\t2.1\t1.0\t0.6\t1.5\t8.3\t\t2.40\t32.7\t-0.5\r\nBench\tAndre Iguodala, GS SF\t\r\n25.6\t2.5\/5.0\t.496\t0.7\/1.0\t.691\t0.8\t3.9\t3.4\t0.9\t0.4\t0.7\t6.4\t\t4.08\t17.8\t-1.2";
var sampleTeam2 = "Bench\tOtto Porter Jr., Wsh SF, PF\t\t\t\t\t33.9\t5.6\/10.5\t.534\t1.3\/1.6\t.795\t2.1\t6.7\t1.6\t1.5\t0.6\t0.7\t14.6\t\t9.73\t89.6\t+1.4\r\nBench\tNikola Jokic, Den PF, C\t\t\t\t\t26.9\t6.6\/11.3\t.580\t2.5\/3.1\t.816\t0.6\t9.0\t4.3\t0.8\t0.8\t2.1\t16.3\t\t10.33\t92.8\t+0.3\r\nBench\tMarcin Gortat, Wsh C\t\t\t\t\t34.5\t5.3\/8.9\t.596\t1.4\/2.0\t.682\t0.0\t11.4\t1.6\t0.6\t1.0\t1.5\t11.9\t\t8.49\t91.0\t+1\r\nBench\tBrook Lopez, Bkn C\t\t\t\t\t29.6\t7.4\/15.7\t.470\t4.3\/5.1\t.835\t1.8\t5.2\t2.5\t0.5\t1.8\t2.4\t20.8\t\t8.46\t96.2\t+0\r\nBench\tWilson Chandler*, Den SF  OBreaking News\t\t\t\t\t30.9\t6.1\/13.4\t.454\t2.0\/2.8\t.732\t1.5\t6.7\t2.1\t0.8\t0.4\t1.7\t15.6\t\t2.65\t72.7\t-1.6\r\nBench\tAndrew Wiggins, Min SG, SF\t\t\t\t\t37.2\t8.6\/18.5\t.463\t4.8\/6.3\t.753\t1.3\t4.1\t2.5\t0.9\t0.4\t2.3\t23.2\t\t10.51\t97.9\t+0\r\nBench\tHarrison Barnes, Dal SF, PF\t\t\t\t\t35.8\t8.1\/17.1\t.474\t2.8\/3.4\t.841\t1.0\t5.2\t1.5\t0.8\t0.2\t1.3\t20.1\t\t0.46\t91.5\t-0.3\r\nBench\tGary Harris, Den SG, SF\t\t\t\t\t28.7\t5.0\/10.5\t.475\t1.8\/2.4\t.740\t1.7\t3.1\t2.5\t1.2\t0.2\t1.3\t13.4\t\t4.45\t35.4\t+3.8\r\nBench\tJeff Teague, Ind PG\t\t\t\t\t32.6\t5.0\/11.1\t.449\t4.4\/5.2\t.852\t1.0\t4.2\t8.1\t1.4\t0.5\t2.8\t15.4\t\t7.37\t95.4\t+0.1\r\nBench\tBlake Griffin, LAC PF\t\t\t\t\t33.3\t8.2\/16.7\t.490\t5.2\/6.9\t.758\t0.3\t8.8\t5.0\t1.1\t0.6\t2.4\t21.9\t\t9.34\t99.9\t+0\r\nBench\tMichael Kidd-Gilchrist, Cha SF\t\t\t\t\t29.7\t3.6\/7.8\t.457\t1.9\/2.5\t.765\t0.0\t7.5\t1.4\t0.8\t1.0\t0.8\t9.0\t\t3.43\t45.6\t+0\r\nBench\tBuddy Hield, Sac SG, SFRecent News\t\t\t\t\t20.4\t3.2\/8.3\t.392\t0.5\/0.6\t.879\t1.6\t2.9\t1.4\t0.3\t0.1\t0.8\t8.6\t\t0.19\t21.6\t+6.7\r\nBench\tDarren Collison, Sac PG\t\t\t\t\t30.9\t5.2\/10.8\t.481\t2.1\/2.4\t.856\t1.2\t2.1\t4.2\t1.1\t0.1\t1.7\t13.7\t\t5.95\t67.1\t-0.4\r\n";
var sampleTeam3 = "PG\tEric Bledsoe, Pho PG\t\t\t\t\t33.2\t7.0\/15.9\t.442\t6.0\/7.0\t.850\t1.6\t4.9\t6.2\t1.4\t0.4\t3.3\t21.6\t\t4.22\t98.9\t+0\r\nSG\tNicolas Batum, Cha SF, SG\t\t\t\t\t34.6\t5.0\/12.2\t.407\t3.2\/3.8\t.847\t1.8\t7.1\t6.1\t1.1\t0.4\t2.7\t15.0\t\t4.74\t97.3\t+0\r\nSF\tKhris Middleton, Mil SF, SG\t\t\t\t\t19.8\t3.8\/8.0\t.469\t2.5\/3.0\t.833\t0.5\t2.0\t4.5\t1.5\t0.3\t1.0\t10.5\t\t-0.32\t58.6\t+7.3\r\nPF\tKevin Durant, GS SF, PFBreaking Video\t\t\t\t\t34.1\t9.1\/17.0\t.539\t5.6\/6.3\t.876\t1.9\t8.3\t4.9\t1.1\t1.7\t2.3\t25.8\t\t12.79\t99.9\t+0\r\nC\tDwight Howard, Atl C\t\t\t\t\t29.5\t5.3\/8.2\t.644\t3.0\/5.4\t.553\t0.0\t13.0\t1.2\t0.9\t1.3\t2.1\t13.5\t\t3.48\t96.7\t+0\r\nG\tEric Gordon, Hou SGRecent News\t\t\t\t\t30.5\t5.9\/14.2\t.417\t1.9\/2.3\t.838\t3.5\t2.7\t2.8\t0.6\t0.5\t1.8\t17.2\t\t-0.78\t73.6\t-0.4\r\nF\tWesley Matthews, Dal SG, SF\t\t\t\t\t35.4\t5.2\/12.8\t.407\t2.2\/2.7\t.813\t2.7\t3.6\t2.5\t1.1\t0.2\t1.3\t15.3\t\t5.17\t71.6\t-0.2\r\nUTIL\tJohn Wall, Wsh PG\t\t\t\t\t36.6\t8.3\/18.4\t.452\t5.1\/6.3\t.812\t1.1\t4.4\t10.6\t2.1\t0.6\t4.2\t22.8\t\t7.45\t99.9\t+0\r\nUTIL\tKyle Lowry, Tor PG\t\t\t\t\t37.7\t7.2\/15.5\t.463\t5.1\/6.1\t.826\t3.3\t4.7\t6.9\t1.4\t0.3\t2.8\t22.8\t\t5.71\t99.8\t+0\r\nUTIL\t \t\t\t\t\t--\t--\t--\t--\t--\t--\t--\t--\t--\t--\t--\t--\t\t--\t--\t--\r\nBENCH\t\tFEB 22\t\t2017 SEASON STATS\t\tRESEARCH\r\nSLOT\tPLAYER, TEAM POS\t\tOPP\tSTATUS ET\t\tMIN\tFGM\/FGA\tFG%\tFTM\/FTA\tFT%\t3PM\tREB\tAST\tSTL\tBLK\tTO\tPTS\t\tPR15\t%OWN\t+\/-\r\nBench\tRicky Rubio, Min PG\t\t\t\t\t32.1\t2.7\/7.0\t.386\t2.8\/3.2\t.872\t0.7\t3.8\t8.4\t1.8\t0.1\t2.4\t8.9\t\t5.23\t79.0\t+0.1\r\nBench\tClint Capela, Hou C\t\t\t\t\t23.3\t5.3\/8.3\t.645\t1.3\/2.7\t.500\t0.0\t7.5\t0.9\t0.5\t1.3\t1.2\t12.0\t\t2.45\t63.8\t-0.4\r\nBench\tDirk Nowitzki, Dal PF, C\t\t\t\t\t26.0\t5.2\/12.4\t.417\t2.0\/2.3\t.870\t1.5\t6.0\t1.6\t0.7\t0.7\t0.9\t13.9\t\t6.57\t75.2\t+1.4\r\nBench\tJon Leuer, Det PF\t\t\t\t\t27.0\t4.5\/8.7\t.512\t1.5\/1.7\t.906\t0.8\t5.7\t1.7\t0.4\t0.4\t0.9\t11.2\t\t4.13\t23.8\t+1.7";
