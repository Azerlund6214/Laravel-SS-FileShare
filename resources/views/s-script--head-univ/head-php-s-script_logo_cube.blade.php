<?php
# Задача - вывести ANCII лого скрипта

# Сайт где делал:   https://www.topster.su/text-to-ascii/doom.html
# там еще длиннющий список вниз, я отсмотрел все что вмещалось на 1 странице (до contrast (37 лайков))


$beg = "<!-- \n";
$end   = "\n -->";

$logo = array( );

# Ключ = название стиля ANCII с сайта в начале
######################################################################################

/*

$logo ["cube_2x2-100"] = 
"
                                            ....                                                    
                                       .....DDD:....                                                
                                       .:D+7++++++DI                                                
                                   ...D8++++++++++++++8:..                                          
                                ...DO++++++++++++++++++++78I..                                      
                             .. OO++++++++++++++++++++++++++++D=,...                                
                        .....8D7+++++++++++++++++++++++++++++++DNDOD......                          
                       ..88++NINDI++++++++++++++++++++++++++ODDN8+++++OM..                          
                    ..+O+++++++++D+MDI+++++++++++++++++++DDDD8++++++++++++Z8. ..                    
                 ..,N7++++++++++++++78?NNI++++++++++++ZDNDD7++++++++++++++++++8D ...                
             ....N++++++++++++++++++++++7N+DDNNNNNDDN+N87+++++++++++++++++++++++++7DI...            
             .O+7+++++++++++++++++++++++++8MNNNNNNNNNND+++++++++++++++++++++++++++++7DDN..          
          .DD+++++++++++++++++++++++++++++78NNNNNNNNNND8++++++++++++++++++++++++++7DDDD88N.         
        .DNDDD++++++++++++++++++++++++++++DNNNNNNNNMNNNID7++++++++++++++++++++++ONND8O8ND8..        
       .ND?:I8NNDDZ+++++++++++++++++++7NDD8++++++++++++++D?8D++++++++++++++++ZMDN8OODNDDD8          
        DDNNND+~?ONDDDI+++++++++++++DDNZD++++++++++++++++++++DZNNI++++++++IDDDDOODDN8D?IID          
       .D8~:NNNNND?=I8DNND7++++++DDDZD+++++++++++++++++++++++++++N78DO77DDNDOODNDDD?IIIII8.         
       .N=++++=IDDNNNO?+I8DDDNNDD8D++++++++++++++++++++++++++++++++ZDD+ND8O8NNDDDIIIIIIII8          
       .N=++++++++=+DNNNND7+7ODNDD+++++++++++++++++++++++++++++++ODDNN8NNDNDDD77IIIIIIII7+          
       .N~++++++++++++~DNNNNNMN+7ONNDN7++++++++++++++++++++++++DDNNDOODNNDD?IIIIIIIIIIIII?          
       .N=++++++++++++++++=NDNNNN87II8DNDD7++++++++++++++++7D8NNNOODNDDDNDIIIIIIIIIIIIII?.          
       .N~++++++++++++++++++NNNDNDNNNO?=7ONDDD7+++++++++7NNDNNOO8NDDD?IIND7IIIIIII7IIIIII           
       .N=++++++++++++++++++MND++=~M8DNNN8?+78NDDN7++7DDDNN8Z8NNDDIIIII?NDI7IIIIIIIIIIII+.          
       .N=++++++++++++++++++MND+++++++~MDNNNNZ++ZDNDDDNNDZODNDD8IIIIIIIINNIIIIIIIIIIIIIIO.          
       .D=++++++++++++++++++MNN+++++++++++=8MNNNNO??ND+Z8NDDDIIIII7IIII+NNIIII7IIIIIIIII8.          
       .D=++++++++++++++++++NNN++++++++++++++~INNNNNNNNNDD?II7III77IIIIONN7IIIIIIIIIIIIID.          
       .D=++++++++++++++++++NNN++++++++++++++++++7NNNNNDZII7IIIIIIII7IIDND7I7IIIIIIIIIIID.          
       .D=++++++++++++++++++NNN+++++++++++++++++++NNNNDDIIIIII7IIII7I7IDN8II7IIIIIIII7IID.          
       .N=++++++++++++++++++NNM+++++++++++++++++++NNNNND77IIIII7I777I7IDNOIIIII7II7III78D.          
       .DO++++++++++++++++++NNN=++++++++++++++++++NNNNNDII77I7II77IIIII8NZII7IIIIII7I88ND.          
       .ODND=+++++++++++++++NNM+++++++++++++++++++NNNNND77I7I7II7777I77NDNII7I7I7IDMDDDZD.          
       .NDN+MDDM=++++++++++=DNN=++++++++++++++++++NNNDDD77777777I777I77NNDI777IZN8DD77IIN.          
        N~+=INNIMNDN==+=++=DNNN=++++++++++++++++++NNNNDD7777II77I77777DNNNDDNDDNDN7IIIII8.          
       .D~++++=~NDD7NDNNDDNNNNNN++++++++++++++++++NNNNDN77777II777777INNNNNNONDII77I7IIIO.          
       .D~+++++++=+:NMZNNNNNNNNN8=++++++++++++++++NNNNDNI777777777777MNNNNNOD77I777I77III.          
       .D~++++++++++++=DNNNNNNNNNN++++++++++++++++NNNNDNI77I7777777INNNNNNDN7I7777II7II7:.          
       .D~++++++++++++++=NNNNNNNNNN++=++++++++++++DNNNDN777I77777IDNNMNNNNN7I7777777I7IO..          
       .D~++++++++++++++++DNNNNNNMNNNN=+++++++++++DNNNDN7777777NN8DDDNNNND777777777777I8..          
       .N~+++++++++++++++++NNNNNNNNDDM?MNM~+=+++++NNNNDN777I8NNNN87IIZNNN+777777777777IN..          
       .N~+++++++++++++++++?NNNDN=+++=~NNN7NDN=+++NNNNDNIIDNOND?I77777DNN77777777777I77D .          
       .D=+++++++++++++++++=NNN=++++++++++~DDNZMNDNNNNDDDONN?777777777INN777777777777I7D..          
       .N~++++++++++++++++++NNN++++++++++++++=ONDDNNNNM8ND777777I777I77NN77777777777777D..          
        N~++++++++++++++++++NND++++++++++++++++++=DNNNDD+77777777777777NN77777777777777D.           
       .D~++++++++++++++++++NNN+++++++++++++++++++NDNNNN77777777777777INN7777777777777+D            
       .D+++++++++++++++++++NNN+++++++++++++++++++NNNNNDI77I77777777777NN77777I7+777ZDO.            
       .DN=+++++++++++++++++DNN+++++++++++++++++++NNNND87777I777777777+ND777777777DDI:..            
        .=DNDN=?++++++++++++NNN+++++++++++++++++++NNNNNOI7777777777777ZN8777777ZD8?~,,..            
        ..:+IDDNN+++++++++++NNN+++++++++++++++++++NNNNNZI77777777777I78N+77778N?~:,,....            
        ....,:=IZDDNN~=+++++DNM+++++++++++++++++++NNNNN+77777777777777DN+7+D8+::,.....              
            ....,~?78DNN8+++NNM+++++++++++++++++++NNNNDI77777777777777DNDDI+:,....                  
               .....,~?IDDNDNNN+++++++++++++++++++NNNNDI7777777777777ODD+=:,...                     
                   ....,~=IODNNM=+++++++++++++++++NNNNDI7777777777+DD7+:,.....                      
                       ....,~+I+NNDN=+++++++++++++NNNNDI777777778NDI~:,,......                      
                            ...:=I7NNNN==++++++++=NNNDNI777777DDI+~:,,......                        
                                ..,~=I7DNNN~++++++NNNND7777NN8+~:,............                      
                                  ....,~+7ODDNO+==NNNNDD7DDI+~:,......... ..                        
                                       ..,,:?78DDDNNNNND8+~:,.....                                  
                                         ....,~=?7NNNDI=:,........ .                                
                                              ............                                          
";

*/

######################################################################################
$logo ["cube_2x2-norm"] = 
"                            -/oso/-.                                 
                        .:osssssssssso/:.                            
                    `:+ssssssssssssssssssso/:.                       
                .-/shysssssssssssssssssssssyhdho+:-`                 
            `-/ssssssyyyyyyssssssssssssyhddhyssssssss+/-.            
         .:osssssssssssssyyyhhhhhhyhhhdhyysssssssssssssssso/-.`      
     `:+ossssssssssssssssssssdmNNNNNNmdssssssssssssssssssssyydhs-    
   :oydhhyyssssssssssssssssyhmmmdddddddhyyysssssssssssssyhdddddms    
   yddhyyyyhhhyysssssssyyhdhhyysssssssssyyyhhyyyssssyydddddmmdhyo    
   yo:+syhdhyyhhhhhyyhddhysssssssssssssssssssyyydhhddddmmdhyssss+    
   y:...--:+syhdhhyddddhyyssssssssssssssssssyyhdmdmmmmdhysssssss/    
   y:........--:+sdmmhhhhhhhhyyssssssssssyhdmmddmmdmmyssssssssss/    
   y/.............sNy+shhdhyyhhhhhyyyyyhdmmddmddhysmdssssssssssy-    
   s/.............oN+..-:/oyhddhyyhhddddddmdhyyssssmdssssssssssy-    
   s/.............oN+.......-:/oyhddmmdmdhyssssssssNhssssssssssy.    
   s/.............sN+............-+mNmmhssssssssssyNhssssssssssh`    
   s/.............sm+.............-mmmmhssssssssssyNhssssssssyhd     
   sds+/:-........yN+.............-mmmmyssssssssssyNdssssyyhddhh     
   syoyhhyo+:----+mNs.............-mmmmyssssssssssdNmdhhdddhyssy     
   s+..-:+syhhhhdNNNm/............-mmmmyssssssssydNNNNmdhyssssss     
   s+.......:/odNNNNNms:..........-mmmmyssssssyydNNNNmyyssssssss     
   s+..........-omNNNNNdy+:--.....:mmmmyssyyyhdmmNNNmyyyssssssyo     
   y+............+NNNmyssyhyyo/:--:mmmmyyhddmdhyyhmNhyyyyyyysyy+     
   y+.............hNd:....-:+shhhyhmmmmdddhyyyyyssdNyyyyyyyyyyy/     
   y+.............yNo..........-/+ymNmmhyyyyyyyyyydmyyyyyyyyyyh:     
   y+.............yNo.............-mmmmyyyyyyyyyyydmyyyyyyyyyyy`     
   +h+:--.........yN+.............-mmmmsyyyyyyyyyydmyyyyyyhyo:`      
    .+syyo/:--....yN+.............-Nmmmsyyyyyyyyyymdyyyhyo/.``       
      `.-/syyso:--hN+.............:mmmmsyyyyyyyyyymdhyo:.`           
           `.:+yyymNo--...........:mmmmyyyyyyyyyhhho:.`              
               ``-/oyyso/---......:mmmmyyyyyyhhyo:.`                 
                    `.-+syys+:--../mmmdyyyhhy+-.`                    
                         `.:+shyo+smmmmhhs/-.`                       
                              `-/oyhdho:.`                            
";
######################################################################################
######################################################################################

/*

$logo ["cube_2x2-norm-zamena"] = 
"
                            -/o.o/-.                                 
                        .:o.........ho/:.                            
                    `:+h..................o/:.                       
                .-/.hhhhh..................hhdho+:-`                 
            `-/.........hhhh...........hhddh.........+/-.            
         .:o...............hhhhhhh.hhhdh..................o/-.`      
     `:+o....................dmNNNNNNmd......................dh.-    
   :o.dhh...................hmmmdddddddhhh...............hdddddm.    
   .ddh....hhh...........hdhh............hhhhh........dddddmmdh.o    
   .o:+..hdh..hhhhh..hddh....................hhhdhhddddmmdh.....+    
   ./...--:+..hdhh.ddddh......................hdmdmmmmdh......../    
   ./........--:+.dmmhhhhhhhh.............hdmmddmmdmm.........../    
   ./..............N.+.hhdh..hhhhh.....hdmmddmddh..md...........h    
   ./.............oN+..-:/o.hddh..hhddddddmdh......md...........h    
   ./.............oN+.......-:/o.hddmmdmdh.........Nh...........h    
   ./..............N+............-+mNmmh...........Nh..........h/    
   ./..............m+.............-mmmmh...........Nh.........hd     
   .d.+/:-.........N+.............-mmmm............Nd......hddhh     
   .do.hh.o+:----+mN..............-mmmm...........dNmdhhdddh...h     
   .+..-:+..hhhhdNNNm/............-mmmm..........dNNNNmdh......h     
   .+.......:/odNNNNNm.:..........-mmmm.........dNNNNm.........h     
   .+..........-omNNNNNd.+:--.....:mmmm......hdmmNNNm..........o     
   .+............+NNNm....h..o/:--:mmmm..hddmdh..hmNh..........+     
   .+.............hNd:....-:+.hhh.hmmmmdddh.......dN.........../     
   .+..............No..........-/+.mNmmh..........dm..........h:     
   .+..............No.............-mmmm...........dm..........h`     
   +h+:--..........N+.............-mmmm...........dm......h.o:`      
    .+...o/:--.....N+.............-Nmmm...........md...h.o/.``       
      `.-/....o:--hN+.............:mmmm...........mdh.o:.`           
           `.:+...mNo--...........:mmmm.........hhho:.`              
               ``-/o...o/---......:mmmm......hh.o:.`                 
                    `.-+....+:--../mmmd...hh.+-.`                    
                         `.:+.h.o+.mmmmhh./-.`                       
                              `-/o.hdho:.`                           
";

######################################################################################
$logo ["aac"] = 
"

";
######################################################################################
$logo ["aad"] = 
"

";    */
######################################################################################

echo $beg;
echo array_values( $logo )[ rand( 0 , count($logo) - 1)];
#echo $end;


unset ( $beg  );
unset ( $end  );
unset ( $logo ); # Чтоб не занимал память

?>