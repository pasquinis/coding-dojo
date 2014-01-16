function life(start)
    kernel = [1 1 1; 1 0 1; 1 1 1]
    neighbors = @(b) conv2(b, kernel, "same")
    born_with_three = @(b) neighbors(b) == 3
    born_with_two = @(b) neighbors(b) == 2 & b
    evolve = @(b) born_with_three(b) | born_with_two(b)

    i = 1;
    while(i <= 10)
        #{
        #}
        spy(start);
        drawnow;
        start = evolve(start);
        disp(start);
        pause(0.5);
        disp('');
        disp('Evolution');
        disp(i);
        disp('');
        i++;
    end
end

random = rand(60) > 0.7;
disp(random);
life(random);
